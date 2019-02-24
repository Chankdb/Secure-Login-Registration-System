<?php  

class Hash{

	//Concatenating a salt to the password adds an additional layer of security to the database. f two users have the same password then a hacker could match the password of one to the other and would know two passwords instead of one.
    public static function make($string, $salt = ''){
        return hash('sha256', $string.$salt);
    }

    public static function salt($length){
        return mcrypt_create_iv($length);
    }

    public static function unique(){
        return self::make(uniqid());
    }
}
?>