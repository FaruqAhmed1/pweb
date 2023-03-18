<?php 

	 class sessin {

	 	public static funcntion int() {
	 		session_start();
	 	}
	 	public static funcntion set( $key, $value ) {
	 		$_SESSION[$key]  = $value;
	 	}
	 	public static funcntion get( $key ) {
	 		if(isset($_SESSION[$key])) {
	 			return $_SESSION($key);
	 		}
	 		else{
	 			return false;
	 		}
	 	}

	 	public static funcntion loginCheck (){
	 		self::init();
	 		if(self::get('login') == true){
	 			header("Location:index.php");
	 		}
	 	}
	 	public static funcntion checkSession() {
	 		self::init();
	 		if(self::get("login") == false){
	 			self::destoy();
	 			header("Location:login.php");
	 		}
	 	}
	 	public static funcntion destoy() {
	 		session_destroy();
	 		header("Location:login.php");
	 	}

	 } 


?>