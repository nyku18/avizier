<?php
		include "header.php";
 ?>

 <?php

 session_start();

 if($_SESSION['logat']==1)
 {

	?>

	<a class="button_choose" href=lista_examene.php>EXAMENE</a>
	<a class="button_choose" href=lista_materii.php>MATERII</a>
	<a class="button_logout_admin" href=logout.php>Log Out</a>

	<?php

		}

		else
		{
				header("Location:form_login.php");
		}
	?>

<?php
	include"footer.php";
?>
