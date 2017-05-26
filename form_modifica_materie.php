<?php
	include "header.php";
?>
	<form action=modifica_materie.php method=POST>
	<input type="hidden" name="id_materie" value="<?php echo $_GET['id_materie']; ?>">
		<?php
			include "connect.php";
			$sql="SELECT * FROM materie WHERE id_materie=" . $_GET['id_materie'];
			$result_materie=mysqli_query($connection, $sql);
			$row_materie=mysqli_fetch_array($result_materie, MYSQLI_ASSOC);
		?>
		<label> Materie </label> <input type=text name="materie" required value="<?php echo $row_materie['nume_materie']; ?>"> <br>

		<input class="button" type=submit value=MODIFICĂ>

<?php
	include "footer.php";
?>
