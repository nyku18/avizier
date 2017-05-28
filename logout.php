<?php

    session_start();
    $_SESSION['logat']="";
    $_SESSION[]=array();
    session_unset();
    session_destroy();
    header("Location:index.php");
?>
