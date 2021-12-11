<?php 

$db_conn=mysqli_connect('localhost','root','','cms_project');

if(!$db_conn){
    echo 'Connection Failed';
    exit;
}

// session_start();
?>