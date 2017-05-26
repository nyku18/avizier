<?php
		include "header.php";
 ?>

 <form action=adaugare_examen.php method=POST>
   <h1>LOGARE ADMINISTRATOR</h1>

   <label>Utilizator </label> <input type=name name="user" required> <br>

   <label>Parola </label> <input type=password name="password" required> <br>

   <input class="button" type=submit value=AUTENTIFICARE>

 <?php
 	include"footer.php";
 ?>
