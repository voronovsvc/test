<?php
	// файл
	$filename = 'zapchasti.jpg';
	$sizefilename = getimagesize ( $filename );
	
	
	
	$res_x = 0;
	$res_y = 0;
	
	$src_x = ( $sizefilename[0] - 180 ) / 2;
	$src_y = ( $sizefilename[1] - 180 ) / 2;
	
	$res_w = 180;
	$res_h = 180;
	
	$src_w = 180;
	$src_h = 180;
	
	// ресэмплирование
	$res_image	= imagecreatetruecolor ( $res_w, $res_h );
	$src_image	= imagecreatefromjpeg ( $filename );
	
	// imagecopyresized
	$result = imagecopyresampled (
	
	$res_image ,	// Ресурс целевого изображения.
	$src_image ,	// Ресурс исходного изображения.
	
	$res_x ,		// x-координата результирующего изображения. 
	$res_y ,		// y-координата результирующего изображения. 
	
	$src_x ,		// x-координата исходного изображения. 
	$src_y ,		// y-координата исходного изображения. 
	
	$res_w ,		// Результирующая ширина. 
	$res_h ,		// Результирующая высота. 
	
	$src_w ,		// Ширина исходного изображения.
	$src_h			// Высота исходного изображения.
	
	);
	
	if ( $result ) {
		// тип содержимого
		header('Content-Type: image/jpeg');
		imagejpeg($res_image, null, 100);
	}
	
	// вывод
	//imagejpeg($res_image, null, 100);
	
	//copy($filename, "123456".$filename)
	
	//rename($filename, "123456".$filename);

?>


