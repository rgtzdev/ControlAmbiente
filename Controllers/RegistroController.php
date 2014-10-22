<?php

	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/Registro.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'].'/Prototipos/ControlAmbiente/Models/Dato.php' );
	
	class RegistroController{
	
		public static function getAll_JSON(){
		
			
		
		}//End of getAll_JSON function
		
		public static function getAll(){
			
			
			
		}//End of getAll function
		
		public static function getLastTenReg( $regDescripcion ){
		
			$r = new Register;
			$all = json_decode( $r->getByAttr_json( 'descripcion', $regDescripcion ) , true );
		
			return json_encode( array_slice( $all ), -10 );
		
		}//End of getLastTenReg function
		
		public function Add( $datoDescripcion, $valor ){
		
			$d = new Dato;
			$d = $d->getByAttr( 'descripcion', $datoDescripcion );
			
			$object = array(
				'registroid' => 0,
				'datoid' => $d->datoid, 
				'fecha' => date('m').'/'.date('d').'/'.date('Y'),
				'hora' => date( 'h:i A' ),
				'valor' => $valor
			);
			
			$r = new Registro;
			$r->create( $object );
			$r->save();
						
			return 'success';
			
		}//End of Add function
		
		public static function LoginValidation(){
			
		}//End of LoginValidtion function
	
	}//End of UserController Class

?>