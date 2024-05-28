<?php 
session_start();
if ((isset($_SESSION["user"])) AND (isset($_SESSION["ID"]))) 
{
    $user = $_SESSION["user"];
    $klantID = $_SESSION["ID"];
} else {
    $user = "Gast";
    $klantID = "";
}
?>