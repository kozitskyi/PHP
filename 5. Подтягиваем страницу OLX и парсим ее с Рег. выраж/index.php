<?php
//$homepage = file_get_contents('https://ru.aliexpress.com/');
//
//preg_match_all("/<dt class=\"cate-name\"><span>(.*)<\/span>/", $homepage, $out, PREG_PATTERN_ORDER);
////var_dump($out);
//
//
//
//    for($j=0; $j<15; $j++){
//        echo($out[0][$j]);
//        echo ('<br>');
//}


$ali=file_get_contents("https://ru.aliexpress.com/");
$out=[];
preg_match_all("/<dt class=\"cate-name\"><span>(.*?)<\/span>/s",$ali,$out);
$fout=preg_replace("/\s<i class=\"zap\"><\/i>/","",$out[1]);
    for($j=0; $j<count($fout); $j++){
        echo($fout[$j]);
        echo ('<br>');
}




