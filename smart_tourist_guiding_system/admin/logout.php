<?php
include_once("db_functions.php");
@session_start();
session_destroy();
header("location:login.php");
?>