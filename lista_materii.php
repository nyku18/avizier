<?php
	include"header.php";
?>

 <?php
 session_start();

 if($_SESSION['logat']==1)
 {

       include "connect.php";
       $sql="SELECT id_materie, nume_materie FROM materie";

       $result_materie=mysqli_query($connection, $sql);
   ?>

   <h1>MATERII</h1>

   <a class="button_insert" href=form_adaugare_materie.php>Adaugă materie</a>

	 <a class="button_logout_lista_materie" href=logout.php>Log Out</a>

       <ul class="table">

				 <li class="row">
					 <div class="column table_head">
						 <?php echo 'Nr. crt.'; ?>
					 </div>

					 <div class="column table_head">
						 <?php echo 'Materia';?>
					 </div>
				 </li>

       <?php
			 		$i=1;
					while($row_materie = mysqli_fetch_array($result_materie,MYSQLI_ASSOC))
	        {
	       	?>
	        <li class="row">
	          <div class="column">
	            <?php echo $i; ?>
	          </div>

	          <div class="column">
	            <?php echo $row_materie['nume_materie'];?>
	          </div>


						<div class="column">
	            <?php echo "<a class='red_text button_yellow' href='sterge_materie.php?id_materie=".$row_materie['id_materie']. "'>Șterge</a>";?>
	          </div>

						<div class="column">
	            <?php echo "<a class='blue_text button_yellow' href='form_modifica_materie.php?id_materie=".$row_materie['id_materie']. "'>Modifică</a>";?>
	          </div>

	        </li>
	       <?php
				 		$i++;
	       }
 ?>
     </ul>

		 <?php
			 }

		 else
		 {
				 header("Location:form_login.php");
		 }
		 ?>

  <?php
 		include "footer.php";
  ?>
