<?php
function logger($log){
    if(!file_exists('../../log.txt')){
        file_put_contents('../../log.txt',"created new log");
    }
    $ip=$_SERVER["REMOTE_ADDR"];//getting client ip
    date_default_timezone_set('Asia/Kathmandu');
    $time=date('m/d/y h:iA',time());
    
    $content=file_get_contents('../../log.txt');
    $content .="$ip\t$time\t$log\r";

    file_put_contents('../../log.txt',$content);
}
?>