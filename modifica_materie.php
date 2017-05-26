<?php

		include "connect.php";

		$id_materie= $_POST['materie'];
		$id=$_POST['id_materie'];

		$sql= "UPDATE materie SET nume_materie='$id_materie' WHERE id_materie=$id";
		$result= mysqli_query($connection, $sql);
		if($result)
			header("Location: lista_materii.php");
		else
			echo "Eroare".mysqli_error($connection);
?>
