<?php

		$id_materie=$_POST['materie'];

		include "connect.php";

		$sql= "INSERT INTO materie(nume_materie) VALUE ('$id_materie')";
		$result=mysqli_query($connection, $sql);

		if($result)
			header("Location: lista_materii.php");
		else
			echo "Eroare".mysqli_error($connection);
?>
