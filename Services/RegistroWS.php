<?php

	require_once(  $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Controllers/RegistroController.php' );
	
	if( isset( $_GET['action'] ) ){
		
		if( $_GET['action']  == 'setLastTenReg' ){
			
			return RegistroController::getLastTen( $_GET['descripcion'] );
			
		}
		
	}

?>