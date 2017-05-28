<?php
		include "header.php";
 ?>

 <form action=login.php method=POST>
   <h1>LOG IN</h1>

   <label>Utilizator </label> <input type=name name="user" required> <br>

   <label>Parola </label> <input type=password name="parola" required> <br>

   <input class="button" type=submit value=AUTENTIFICARE>

  </form>

 <?php
 	include"footer.php";
 ?>
