<?php
	
	include"connect.php";
	
	$id=$_GET['id_materie'];
	$sql="DELETE FROM materie WHERE id_materie='$id'";
	$result=mysqli_query($connection, $sql);
	
	if($result)
		header ("Location: lista_materii.php");
	else
		echo "Eroare".mysqli_error($connection);
?>