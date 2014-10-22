<?php

	require_once(  $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Controllers/DatoController.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Controllers/ControlController.php' );

	if( isset( $_GET['action'] ) ){
		
		if( $_GET['action']  == 'setAll' ){
			
			$temp = $_GET['tm'];
	    		$hum = $_GET['hm'];
	    		$lum = $_GET['lm'];
	    		$ip = $_GET['ip'];
			
			DatoController::Edit( 1, $temp );
			DatoController::Edit( 2, $hum );
			DatoController::Edit( 3, $lum );

			ControlController::Edit( 'ip', $ip );

			print_r( ControlController::GetFanStatus() );
			
		}else if( $_GET['action'] == 'getAllData' ){
		      
			$datos = DatoController::GetAllDato();
			print_r( $datos );
		}
		
	}

?>