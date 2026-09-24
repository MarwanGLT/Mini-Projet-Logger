<?php 

function write_log($username, $message){
    if ($username == NULL) { $username = "UNKNOWN"; }
    if ($message == NULL) { $message = "EMPTY";}
    if($username == "") {$username = "UNKNOWN"; }
    $date = date("Y-m-d H:i:s");
    $fp = fopen('app.log', 'a');
    fwrite($fp, $date ." | [". $username ."] | [". $message ."]");
    fwrite($fp, " : Bonjour\n");
    fclose($fp);
}


?>