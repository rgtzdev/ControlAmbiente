<?php

	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/Control.php' );

	class ControlController{

	      public static function GetFanStatus(){

	      	     $c = new Control;
		     $rControl = json_decode( $c->getByAttr_json( 'descripcion', 'fan' ), true );
		    
		     return $rControl[0]['valor'];
	      
	      }//End of GetFanStatus Method

	      public static function Edit( $desc, $value ){

	      	     $c = new Control;
		     $control = json_decode( $c->getByAttr_json( 'descripcion', $desc ), true );

		     $c->controlid = $control[0]['controlid'];
		     $c->descripcion = $control[0]['descripcion'];
		     $c->valor = $value;
		     $c->update();

	      }//End of Edit function

	}//End of ControlController Class
?>