<?php 
$filename = '002.jpg';
$size = getimagesize($filename); //��ȡmime��Ϣ 
$fp=fopen($filename, "rb"); //�����Ʒ�ʽ���ļ� 
if ($size && $fp) { 
header("Content-type: {$size['mime']}"); 
fpassthru($fp); // ���������� 
fclose($fp);
exit; 
} else { 
// error 
} 
?> 