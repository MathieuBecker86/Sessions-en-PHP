<?php
session_start();
unset($_SESSION["loginame"]);

session_destroy();

header("location:login.php");