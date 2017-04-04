<?php 
$filename = '002.jpg';
$size = getimagesize($filename); //获取mime信息 
$fp=fopen($filename, "rb"); //二进制方式打开文件 
if ($size && $fp) { 
header("Content-type: {$size['mime']}"); 
fpassthru($fp); // 输出至浏览器 
fclose($fp);
exit; 
} else { 
// error 
} 
?> 