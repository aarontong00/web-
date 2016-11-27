<?php
$path = './use';
$result = scanFile($path);

function scanFile($path) {
	global $result;
	$files = scandir($path);
	foreach ($files as $file) {
		if ($file != '.' && $file != '..') {
			if (is_dir($path . '/' . $file)) {
				scanFile($path . '/' . $file);
			} else {
				$result[] = basename($file);
			}
		}
	}
	return $result;
}
var_dump($result);

?>