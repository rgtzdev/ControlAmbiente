<?php

	if( isset( $_GET['action'] ) ){
	    
	    if( $_GET['action'] == "hora" ){
	    	print( date( "H:i" ) );
	    }

	}
?>