<?php 

function write_log($action, $username, $message)
{
   if ($username == NULL) 
    { 
        $username = "UNKNOWN"; 
    }
    if ($message == NULL)  
    {
        $message == "EMPTY";
    }
   $type = "INFO";
   $ip = $_SERVER['REMOTE_ADDR'];
   $date = date("Y-m-d H:i:s");
   $fp = fopen('app.log', 'a');
   fwrite($fp, $date ." | [". $ip ."] | [". $action ."] | [".$type."] | [".$username."] | [".$message."]\n");
   fclose($fp);
}

?>
