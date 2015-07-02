<?php
	ini_set('display_errors', 1);
	$arsize=array(80,250,600);
	$filedir = $_SERVER['DOCUMENT_ROOT']."/test/"; // the storage directory 
	echo $filedir;
	$image='abcd.jpg';
include_once("img_thumbnail.php");
		foreach ($arsize as $size) 
		{

			$thumb = new thumbnail($filedir.$image);            // generate image_file, set filename to resize
			//$thumb->size_width(340);
			$thumb->size_height($size);                // set width for thumbnail, or
			//$thumb->size_auto(370);                    // set the biggest width or height for thumbnail
			$thumb->jpeg_quality(100);                // [OPTIONAL] set quality for jpeg only (0 - 100) (worst - best), default = 75
			//$thumb->show();                        // show your thumbnail
			$thumb->save($filedir.$size."_".$image); 
		}
		
	
	
?>
