<?php

		include "connect.php";

	  $data=$_POST['data'];
	  $sala=$_POST['sala'];
	  $id_materie=$_POST['materie'];
	  $id_grupa=$_POST['grupa'];
	  $id=$_POST['id_examen'];

		$sql="UPDATE examen SET data='$data',sala='$sala',id_materie='$id_materie',id_grupa='$id_grupa' WHERE id_examen='$id'";
		$result=mysqli_query($connection, $sql);

	  if($result)
			header("Location: lista_examene.php");
		else
			echo "Eroare".mysqli_error($connection);
?>
