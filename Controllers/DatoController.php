<?php

	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/Registro.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/Dato.php' );
	
	class DatoController{
	

		public static function Edit( $datoid, $value ){

		       $d = new Dato;
		       $dato = json_decode( $d->getByAttr_json( 'datoid', $datoid ), true );

		       $d->datoid = $dato[0]['datoid'];
		       $d->descripcion = $dato[0]['descripcion'];
		       $d->valor = $value;
		       $d->update();

		}//End of Edit function

		public static function GetDatoByDescripcion( $des ){

		       $d = new Dato;

		       return json_decode( $d->getByAttr_json( 'descripcion', $des ), true );

		}//End of GetDatoByDescripcion Method

		public static function GetAllDato(){

		       $d = new Dato;
		       return $d->getAll_json();

		}//End of GetAllDato method
	}//End of DatoController Class

?>