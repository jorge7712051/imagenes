<?php
/**
 * 
 */

 

class Imagenes 
{
	
	public $ruta="http://localhost:8080/api/api.php";
	public $rutaarchivos="../archivos/";

	public function BuscarImagen($Nombre)
	{
		# code...
	}

	public function GuardarImagen()
	{ 
		if (isset($_POST['nombre']) && $_POST['nombre'] != '')
		{  
			if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK)
			{
				$fileTmpPath = $_FILES['file']['tmp_name'];
				$fileName = $_FILES['file']['name'];
				$fileSize = $_FILES['file']['size'];
				$fileType = $_FILES['file']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$nuevonombre = md5(time() . $fileName) . '.' . $fileExtension;
				$destino = $this->rutaarchivos . $nuevonombre;
				if(move_uploaded_file($fileTmpPath, $destino))
				{
					$Configuracion = array(
           					'nombre'=>$_POST['nombre'],
           					'ruta' => $destino,
           					'fecha'=> date('Y-m-d'),
           					'request'=>"GuardarImagen",                            
    				);
	
      				$respuesta=$this->Conectar($Configuracion,'POST');  					
  					echo json_encode($respuesta);
				}
				else
				{
  					$Respuesta = array('respuesta' =>'no se pudo subir');
  					echo json_encode($Respuesta);
				}				
			}
		}

		


      
	}

	protected function Conectar($Parametros,$Metodo)
    {
        $ch = curl_init($this->ruta);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $Metodo);

        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($Parametros));

        $response = curl_exec($ch);
        
        //var_dump($response);
        //$response = utf8_encode($response);
        curl_close($ch);
       if($response)
       { 
         //print_r($response);
            $Datos=json_decode($response,true);

            return $Datos;
       }   
               
            
    }
	
}



switch ($_POST['accion'])
{
	case 'BuscarImagen':
	$imagen = new Imagenes();
	$imagen->BuscarImagen($_POST['nombre']);		
	break;

	case 'DescargaImagen':
	$imagen = new Imagenes();
	$imagen->BuscarImagen($_POST['nombre']);		
	break;

	case 'GuardarImagen':
	$imagen = new Imagenes();
	$imagen->GuardarImagen();		
	break;
	
	default:
		# code...
		break;
}

?>