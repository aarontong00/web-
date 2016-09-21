<?php
function searchDir($path,&$data){
if(is_dir($path)){
$dp=dir($path);
while($file=$dp->read()){
if($file!='.'&& $file!='..'){
searchDir($path.'/'.$file,$data);
}
}
$dp->close();
}
if(is_file($path)){
$data[] = substr(strrchr($path , "/"  ) , 1);
}
}

$arr = array();

searchDir("./upload" , $arr);
var_dump($arr);


?>