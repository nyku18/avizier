<?php

  include "connect.php";

	$id=$_GET['id_examen'];
	$sql="DELETE FROM examen WHERE id_examen='$id'";
	$result=mysqli_query($connection, $sql);

	if($result)
		header("Location: lista_examene.php");
	else
		echo "Eroare".mysqli_error($connection);

?>
