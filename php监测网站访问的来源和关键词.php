<?php
$_SERVER['HTTP_REFERER']='http://www.baidu.com/s?wd=http://www.jb51.net';
echo save_www_iiwnet_com_keyword('http://www.baidu.com/s?wd=http://www.jb51.net','http://www.baidu.com/s?wd=http://www.jb51.net');
function save_www_iiwnet_com_keyword($domain,$path){
if(strpos($domain, 'google.com.tw')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'GOOGLE TAIWAN';
$keywords = urldecode($regs[1]); // google taiwan
}
if(strpos($domain,'google.cn')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'GOOGLE CHINA';
$keywords = urldecode($regs[1]); // google china
}
if(strpos($domain,'google.com')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'GOOGLE';
$keywords = urldecode($regs[1]); // google
}elseif(strpos($domain,'baidu.')!==false && preg_match('/wd=([^&]*)/i',$path,$regs)){
$searchengine = 'BAIDU';
$keywords = urldecode($regs[1]); // baidu
}elseif(strpos($domain,'baidu.')!==false && preg_match('/word=([^&]*)/i',$path,$regs)){
$searchengine = 'BAIDU';
$keywords = urldecode($regs[1]); // baidu
}elseif(strpos($domain,'114.vnet.cn')!== false && preg_match('/kw=([^&]*)/i',$path,$regs)){
$searchengine = 'CT114';
$keywords = urldecode($regs[1]); // ct114
}elseif(strpos($domain,'iask.com')!==false && preg_match('/k=([^&]*)/i',$path,$regs)){
$searchengine = 'IASK';
$keywords = urldecode($regs[1]); // iask
}elseif(strpos($domain,'soso.com')!==false && preg_match('/w=([^&]*)/i',$path,$regs)){
$searchengine = 'SOSO';
$keywords = urldecode($regs[1]); // soso
}elseif(strpos($domain, 'sogou.com')!==false && preg_match('/query=([^&]*)/i',$path,$regs)){
$searchengine = 'SOGOU';
$keywords = urldecode($regs[1]); // sogou
}elseif(strpos($domain,'so.163.com')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'NETEASE';
$keywords = urldecode($regs[1]); // netease
}elseif(strpos($domain,'yodao.com')!== false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'YODAO';
$keywords = urldecode($regs[1]); // yodao
}elseif(strpos($domain,'zhongsou.com')!==false && preg_match('/word=([^&]*)/i',$path,$regs)){
$searchengine = 'ZHONGSOU';
$keywords = urldecode($regs[1]); // zhongsou
}elseif(strpos($domain,'search.tom.com')!==false && preg_match('/w=([^&]*)/i',$path,$regs)){
$searchengine = 'TOM';
$keywords = urldecode($regs[1]); // tom
}elseif(strpos($domain,'live.com')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'MSLIVE';
$keywords = urldecode($regs[1]); // MSLIVE
}elseif(strpos($domain, 'tw.search.yahoo.com')!==false && preg_match('/p=([^&]*)/i',$path,$regs)){
$searchengine = 'YAHOO TAIWAN';
$keywords = urldecode($regs[1]); // yahoo taiwan
}elseif(strpos($domain,'cn.yahoo.')!==false && preg_match('/p=([^&]*)/i',$path,$regs)){
$searchengine = 'YAHOO CHINA';
$keywords = urldecode($regs[1]); // yahoo china
}elseif(strpos($domain,'yahoo.')!==false && preg_match('/p=([^&]*)/i',$path,$regs)){
$searchengine = 'YAHOO';
$keywords = urldecode($regs[1]); // yahoo
}elseif(strpos($domain,'msn.com.tw')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'MSN TAIWAN';
$keywords = urldecode($regs[1]); // msn taiwan
}elseif(strpos($domain,'msn.com.cn')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'MSN CHINA';
$keywords = urldecode($regs[1]); // msn china
}elseif(strpos($domain,'msn.com')!==false && preg_match('/q=([^&]*)/i',$path,$regs)){
$searchengine = 'MSN';
$keywords = urldecode($regs[1]); // msn
}
return $keywords;
} 
?>