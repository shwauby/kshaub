<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: welcome.php");
    }
    else
    {
}
?>