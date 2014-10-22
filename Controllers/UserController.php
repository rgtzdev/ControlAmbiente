<?php

	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/User.php' );
	
	class UserController{
	
		public static function getAll_JSON(){
		
			
		
		}//End of getAll_JSON function
		
		public static function getAll(){
			
			
			
		}//End of getAll function
		
		public function Add( $username, $password, $email, $permissionid ){
			
			$object = array(
				'userid' => 0,
				'email' => $email,
				'password' => $password,
				'permissionid' => $permissionid
			);
			
			$u = new User;
			$u->create($object);
			$u->save();
			
			return 'success';
			
		}//End of Add function
		
		public static function LoginValidation(){
			
		}//End of LoginValidtion function
	
	}//End of UserController Class

?>