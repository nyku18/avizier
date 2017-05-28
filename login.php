<?php

    include "connect.php";

    session_start();
    $user=$_POST['user'];
    $parola=md5($_POST['parola']);

    $sql="SELECT * FROM admin WHERE user='$user' AND parola='$parola'";

    $result=mysqli_query($connection, $sql);

    if(mysqli_num_rows($result)==1)
    {
    	$_SESSION['logat']=TRUE;

    	header("Location:form_admin.php");
    }
    else
    	header("Location:form_login.php");
?>
