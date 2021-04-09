<?php 

namespace App\Libraries\Candle;

//use \App\Libraries\Candle\Password;
use  \Config\Services;


class CandleAuth  implements \App\Libraries\Candle\Interfaces\AuthenticationInterface
{
	private static $session = null;
	private static $user = null;

	private static $email = null;
	
	private static function init() {
		//Do initialization
		self::$session = Services::session();
		self::$user    = CandleModel::name("user");
		self::$email = \Config\Services::email();

		return new static;
		
	}



	public static function login($login, $password){
		self::init();


		$user =	self::$user->where('email', $login)
							->first()->toArray();
							
		if ( Password::verify($password,$user["password"])) {
			$new["auth"] = $user;

			
			
			
			self::$session->set($new);
			return true;
		}

		return false;
	}

    public static function logout() {
		self::init();

		if ( self::$session->has("auth") ) {
			self::$session->remove("auth");
			//self::$session->destroy();
		}
		return true;
	}

	public static function register($fname,$lname, $email, $password, $role = 0) {
		self::init();
		//candle config
		$candle = config("candle");

		$role_id = $role;
		if ($role != 0) {
			$role_id = $role;
		} 
		else {
			$role_id = $candle->default_role;
		}

		self::$user->save([
			"fname" => $fname,
			"lname" => $lname,
			"email" =>$email,
			"password" => Password::make($password),
			"role_id" => $role_id
		]);
		
		
	}

    public static function verifyRegistration($generated_key) {
		self::init();
	}



	/**
	 * 
	 * 
	 *  insert email , token and date
	 * 
	 *  @param  $email
	 * 
	 */
	public static function forgot_password($email = null){
		self::init();

		$db      = \Config\Database::connect();
		$builder = $db->table("candle_forgot_password");


		$key = md5(time()+123456789% rand(4000, 55000000));
		
		
		$token = [
		   'email' => $email,
		   'token' => $key, 
		];
		$builder->insert($token);

		return $key;

		
	}
	
	
	public static function auth() {
		self::init();

		if ( self::$session->has("auth") ) {
			return (object) self::$session->get("auth");
		}
		return false;
		
	}

	public static function roleID() {
		self::init();

		if ( self::$session->has("auth") ) {
			//get user details from user id
			$user_row = self::$session->get("auth");
			
			$fresh_user_row = self::$user->find( $user_row['id'] )->toArray();
			return $fresh_user_row["role_id"];
		}
		return false;
		
	}

	public static function isLoggedIn(){
		self::init();

		if ( self::$session->has("auth") ) {
			return true;
		}
		return false;
	}

	//--------------------------------------------------------------------

	
	// set new password from post
	public static function setNewPassword($email, $password) {
		self::init();

		$is_changed = self::$user
			->whereIn('email', $email)
			->set(['password' =>Password::make($password) ])
			->update();


		if ($is_changed) {
			
			self::$email->setTo($email);
			self::$email->setSubject('Password Has Been Changed');
			self::$email->setMessage(view("candle/mail/password_change",compact('email')));
		   
		   // $this->email->attach(ROOTPATH.'assets/img/RT_BioData.pdf');
	
			if (!self::$email->send()) {
						// Generate error
						//echo "Not sent";
						//$data = self::$email->printDebugger(['headers']);
						//print_r($data);
				}
		}

		return $is_changed;

	}
}