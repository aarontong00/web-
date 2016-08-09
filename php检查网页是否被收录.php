<?php
  function checkBaidu($url) {
    $url = 'http://www.baidu.com/s?wd=' . $url;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//CURLOPT_RETURNTRANSFER表示获取的信息以文件流的形式返回，而不是直接输出
    $rs = curl_exec($curl);
    curl_close($curl);
    $arr = parse_url($url);
    if (strpos($arr['query'], 'http://')) {
     $arr['query'] = str_replace('http://', '', str_replace('wd=', '', $arr['query']));
    } else {
     $arr['query'] = str_replace('wd=', '', $arr['query']);
    }
    if (strpos($arr['query'], '?')) {
     $str = strstr($arr['query'], '?');
     $arr['query'] = str_replace($str, '', $arr['query']);
    }
    if (strpos($arr['query'], '/')) {
     $narr = explode('/', $arr['query']);
     $arr['query'] = $narr[0];
    }
    if (strpos($rs, ''.$arr['query'].'')) {
     return 1;
    } else {
     return 0;
    }
}
//如果返回1的话就代表已经被百度收录，0表示没有收录
echo checkBaidu('www.csdn.net');
?>