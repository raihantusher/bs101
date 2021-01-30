<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $login = [
        'email'     => 'required',
        'password'  => 'required|min_length[8]',
       
	];
	
	public $sign_up = [
		'fname'     => 'required',
		'lname'     => 'required',
        'email'     => 'required',
        'password'     		   => 'required|min_length[8]',
		'password_confirm'     => 'required|matches[password]',
       
	];

	public $update_user_info = [
		'fname'     => 'required',
		'lname'     => 'required',
        'email'     => 'required',
	];
	
	public $forgot_password = [
        'email'     => 'required',
	];
	
	public $reset_password = [
		'password'     		   => 'required|min_length[8]',
		'password_confirm'     => 'required|matches[password]',
	];
	
	public $setting = [
		'old_password'     		   => 'required|min_length[8]',
		'password'     		   => 'required|min_length[8]',
		'password_confirm'     => 'required|matches[password]',
    ];
}
