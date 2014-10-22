<?php

 	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Warrior/Classes/Model.php' );

	//Class User Model
	class User extends Model {

		//Global Variables
		protected $userid;
		protected $username;
		protected $email;
		protected $password;
		protected $permissionid;
	}
?>