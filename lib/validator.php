<?php
class Validator
{
	public static function validateForm($fields)
	{
		foreach ($fields as $index => $value) {
			$value = trim($value);
			$fields[$index] = $value;
		}
		return $fields;
	}

	public static function validateImage($file)
	{
		$img_size = $file["size"];
     	if($img_size <= 2097152)
     	{
     		$img_type = $file["type"];
	     	if($img_type == "image/jpeg" || $img_type == "image/png" || $img_type == "image/gif")
	    	{
	    		$img_temporal = $file["tmp_name"];
	    		$img_info = getimagesize($img_temporal);
		    	$img_width = $img_info[0]; 
				$img_height = $img_info[1];
				if ($img_width == $img_height)
				{
					$image = file_get_contents($img_temporal);
					return base64_encode($image);
				}
				else
				{
					throw new Exception("La dimensión de la imagen debe ser cuadrada");
				}
	    	}
	    	else
	    	{
	    		throw new Exception("El formato de la imagen debe ser jpg, png o gif");
	    	}
     	}
     	else
     	{
     		throw new Exception("El tamaño de la imagen debe ser como máximo 2MB");
     	}
	}
	public static function showMessage($type, $message, $url)
	{
		$text = addslashes($message);
		switch($type)
		{
			case 1:
				$title = "Éxito";
				$icon = "success";
				break;
			case 2:
				$title = "Error";
				$icon = "error";
				break;
			case 3:
				$title = "Advertencia";
				$icon = "warning";
				break;
			case 4:
				$title = "Aviso";
				$icon = "info";
		}
		if($url != null)
		{
			print("<script>swal({title: '$title', text: '$text', type: '$icon', confirmButtonText: 'Aceptar', allowOutsideClick: false, allowEscapeKey: false}).then(function(){location.href = '$url'})</script>");
		}
		else
		{
			print("<script>swal({title: '$title', text: '$text', type: '$icon', confirmButtonText: 'Aceptar', allowOutsideClick: false, allowEscapeKey: false})</script>");
		}
	}
}
?>