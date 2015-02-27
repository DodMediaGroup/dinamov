<?php 
/**
* Contiene metodos usados de manera global entre ellos la subida de imagenes al servidor
*/
class Herramientas extends CApplicationComponent
{
	/**
	*	Elimina archivos de la carpeta images/tmp/
	*/
	public function vaciar_temporales()
	{
		$directorio = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/tmp/"; 
		/**
		*	Recorre el directorio y borra los archivos que contiene
		*/
		$handle = opendir($directorio); 
		while ($file = readdir($handle))  { 
			if (is_file($directorio.$file)) { 
				unlink($directorio.$file); 
			}
		}
	}

	public function quitar_guion($cadena)
	{
		$nueva_cadena= explode("_", $cadena);
		$texto='';
		for ($i=0; $i < sizeof($nueva_cadena) ; $i++) { 
			$texto=$texto.$nueva_cadena[$i];
		}
		return $texto;
	}

	public function borrar_archivo($archivo,$carpeta)
	{
		$directorio = $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/".$carpeta."/"; 
		if(file_exists($directorio.$archivo)){
			unlink($directorio.$archivo);
			return true;
		}else{
			return false;
		}
	}
	/**
	*	Agrega datos de la fecha a una variable para evitar reemplazo de archivos 
	* 	con el mismo nombre
	*/
	public function generar_nombre($nombre)
	{
		$variable= explode(".",$nombre);
		$nuevo_nombre= Yii::app()->Herramientas->normalizarUrl($variable[0]).date("m-d-y-H-m-s").".".$variable[1];
		$nuevo_nombre= Yii::app()->Herramientas->quitar_guion($nuevo_nombre);
		return $nuevo_nombre;
	}
	/**
	*	Guarda una imagen en el servidor
	*	Recibe el nombre de la carpeta en la que se va a ubicar preferiblemente creada con anticipacion
	*	Temporal que es el nombre del archivo que se almacena en temporales
	*	Nombre final del archivo
	**/
	public function guardar_imagen($carpeta, $temporal, $nombre)
	{
		$imagen= $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/tmp/".$temporal;
		$ruta_definitiva= $_SERVER['DOCUMENT_ROOT'].Yii::app()->request->baseUrl."/images/".$carpeta."/";
		/**
		*	En caso de que la carpeta temp no contenga el archivo a copiar
		*/
		if(file_exists($imagen)){
			$copia= copy($imagen,$ruta_definitiva.$nombre);
			return true;
		}else{
			return false;
		}
		

	}
	/**
	*	Sube una imagen al directorio de temporales images/tmp
	*	f= Archivo o imagen
	*	Alto maximo
	*	Alto minimo
	*	Ancho maximo
	*	Ancho minimo
	*/
	public function subir_imagen($f, $alto_max, $alto_min , $ancho_max, $ancho_min)
	{
		/**
		*	Recoleccion de parametros del archivo necesarios para la validacion
		*/
		$file = $f;
		$nombre = $file["name"];
		$tipo = $file["type"];
		$ruta_temp = $file["tmp_name"];
		$size = $file["size"];
		$dimensiones = getimagesize($ruta_temp);
		$width = $dimensiones[0];
		$height = $dimensiones[1];
		$carpeta = Yii::app()->request->baseUrl."/images/tmp/";

		/**
		*	HTML que retorna ya sea si encuentra error o todo sale bien
		*/
		$html_1="<div class='bs-callout bs-callout-danger'><h4>";
		$html_2="</h4><p>";
		$html_3="</p></div>";

		/**
		*	Validacion del tipo de archivo
		*/
		if($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
		{
			return $html_1."El archivo no es una imagen".$html_2."Los formatos aceptados son <strong>jpg, jpeg, png y gif</strong>".$html_3;
		/**
		*	Validacion por tamanio o peso
		*/
		}else if($size > 1024*1024)
		{
			return $html_1."La imagen ocupa demasiado espacio".$html_2."El tamanio maximo aceptado es de <strong>1 MB o 1024 Kb</strong>".$html_3;
		/**
		*	Validacion dimensiones
		*/
		}else if($width > $ancho_max || $width < $ancho_min || $height > $alto_max || $height < $alto_min)
		{
			return $html_1."Las dimensiones no corresponden".$html_2."La imagen debe tener preferiblemente <strong>ancho entre: ".$ancho_min."px y ".$ancho_max." <br> alto entre: ".$alto_min." px y ".$alto_max."px  </strong>".$html_3;
		/**
		*	Si paso las anteriores se sube la imagen al servidor en la carpeta images/tmp/
		*/
		}else{
			$src = $_SERVER['DOCUMENT_ROOT'].$carpeta.$nombre;
			move_uploaded_file($ruta_temp,$src);
			/**
			*	Retorna el html para que se pueda ver la imagen
			*/
			return '<img class="img_slide" src="'.$carpeta.$nombre.'">';
		}
	}



	/**
	 * Quitar caracteres especiales de una cadena
	 * Sergio
	 */
	public static function clearSpecial($cadena){
		$cadena = htmlentities($cadena);
		$cadena = preg_replace('/\&(.)[^;]*;/', '\\1', $cadena);
		$cadena = preg_replace("([^A-Za-z0-9_])","", $cadena);

		return $cadena;
	}

	/**
	 * Retorna una url mas comprensible para el visitante del sitio.
	 * @param string $url url rara y poco comprensible por el visitante.
	 * @return Nueva url recodificada y comprensible por el visitante.
	 */
	public static function normalizarUrl($url){
		$originales = 'ÀÁÈÉÌÍÑÒÓÙÚÜàáèéìíñòóùúü&.,¿?!¡-';
	    $modificadas = 'aaeeiinoouuuaaeeiinoouuuy_______';
	    $cadena = utf8_decode($url);
	    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
	    $cadena = strtolower($cadena);
	    $cadena = str_replace(' ', '_', $cadena);
	    $cadena = str_replace('__', '_', $cadena);
	    $cadena = str_replace('___', '_', $cadena);
	    return utf8_encode(Yii::app()->Herramientas->clearSpecial($cadena));
	}

	public static function resizeImage($galery, $name, $nuevo_nombre, $minWidth, $minHeight, $scalar=true, $options=array()){
		list($currentWidth, $currentHeight) = getimagesize($galery.$name);

		$scale = $minWidth / $currentWidth;
		if(($currentHeight * $scale) < $minHeight)
			$scale = $minHeight / $currentHeight;

		$newWidth = ($scalar)?($currentWidth * $scale):$minWidth;
		$newHeight = ($scalar)?($currentHeight * $scale):$minHeight;

		$canvas = imagecreatetruecolor($newWidth, $newHeight);
		$mime = getimagesize($galery.$name);

		switch ($mime['mime']){
			case "image/jpg":
			case "image/jpeg":
				$image = imagecreatefromjpeg($galery.$name);
				break;
			case "image/png":
				$image = imagecreatefrompng($galery.$name);
				break;
			case "image/gif":
				$image = imagecreatefromgif($galery.$name);
				break;
		}

		imagecopyresampled($canvas, $image, 0, 0, 0, 0, $newWidth, $newHeight, $currentWidth, $currentHeight);

		imagedestroy($image);

		switch ($mime['mime']){
			case "image/jpg":
			case "image/jpeg":
				imagejpeg($canvas, $galery."/".$nuevo_nombre, 99);
				break;
			case "image/png":
				imagepng($canvas, $galery."/".$nuevo_nombre, 9);
				break;
			case "image/gif":
				imagegif($canvas, $galery."/".$nuevo_nombre);
				break;
		}
	}

}