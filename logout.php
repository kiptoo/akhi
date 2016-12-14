<?php

session_start();

//unset all sessions
session_destroy();

//redirect the header
header("Location:index.php");
?>