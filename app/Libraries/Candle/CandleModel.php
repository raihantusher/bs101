<?php
namespace App\Libraries\Candle;

use \App\Models\CandleModel as cm;



class CandleModel {

    private static $candlemodel = null;
    private static $model = null;
   

    //string model name for future use
    private static $model_name = "";

    private static $can = false;

    private function init(){
        self::$candlemodel = new cm();
      
    }

    public static function name($name) {
        self::init();
      
        //set model name
        self::$model_name = $name;

        $model = self::$candlemodel->where("name", $name)->first();

        self::$model = new $model["class"];
        
        return self::$model;
    }

    public static function can($permission, $name) {
        self::init();

        self::$model_name = $name;

        $role_id = CandleAuth::roleID();
        
        //echo $role_id;
        $permission = $permission."_".$name;
       
        $has_permission = self::name("role_permission")
                                                ->where("permission", $permission)
                                                ->where("role_id", $role_id)
                                                ->first();
        
        if ($has_permission["can"] == 1) {
            return true;
            
        }
        return false;

        
    }


    



}