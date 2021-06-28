<?php
function logger($log){
    if(!file_exists('logfile.txt')){
        file_put_contents('logfile.txt', '');
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('America/Sao_Paulo');
    $time = date('d/m/Y h:iA',time());

    $contents = file_get_contents('logfile.txt');
    $contents .= "$ip\t$time\t$log\r";

    file_put_contents('logfile.txt',$contents);
}
?>