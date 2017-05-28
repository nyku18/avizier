<?php
	include "header.php";
?>
	<form action=adaugare_materie.php method=POST>

		<?php

			session_start();

			if($_SESSION['logat']==1)
			{

		?>

		<label> Materie </label> <input type=text name="materie" required> <br>

		<input class="button" type=submit value=ADAUGĂ>

		<a class="button_logout_materie" href=logout.php>Log Out</a>

		<?php
			}

		else
		{
				header("Location:form_login.php");
		}
		?>

	</form>

<?php
	include "footer.php";
?>
