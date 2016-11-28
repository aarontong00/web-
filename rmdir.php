<?php
$path = 'd:/';  
rmDir_1($path);  
  
function rmDir_1($path) {  
    $files = scandir($path); 
//	删除当前目录和上一级目录
	foreach($files as $key => $file) {
		if ( $file == '.' || $file == '..') {
			unset($files[$key]);
		}
	}
	if ($files) {
		foreach($files as $file) {
			if (is_dir($path . '/' . $file)) {
				//echo 'dir=' . $path . '/' .  $file . PHP_EOL;
				rmDir_1($path . '/' . $file);
			}
		}
	} else {
		//echo 'rmdir=' . $path . PHP_EOL;
		rmdir($path);
	}
}  
?>