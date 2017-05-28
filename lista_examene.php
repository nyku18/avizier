<?php
		include "header.php";
 ?>

   <?php
	 session_start();

	 if($_SESSION['logat']==1)
	 {

       include "connect.php";
       $sql="SELECT id_examen,data,sala,nume_materie,grupa FROM examen
              JOIN materie ON materie.id_materie=examen.id_materie
              JOIN grupa ON grupa.id_grupa=examen.id_grupa";
       $result_examen=mysqli_query($connection, $sql);
   ?>

	 <h1>EXAMENE</h1>

	 <a class="button_insert" href=form_adaugare_examen.php>Adaugă examen</a>

	 <a class="button_logout_lista_examen" href=logout.php>Log Out</a>

     <ul class="table">

			 <li class="row">
				 <div class="column table_head">
					 <?php echo 'Nr. crt.'; ?>
				 </div>

				 <div class="column table_head">
					 <?php echo 'Grupa';?>
				 </div>

				 <div class="column table_head">
					 <?php echo 'Materia';?>
				 </div>

				 <div class="column table_head">
					 <?php echo 'Data';?>
				 </div>

				 <div class="column table_head">
					 <?php echo 'Sala';?>
				 </div>
			 </li>

       <?php
			 		$i=1;
					while($row_examen = mysqli_fetch_array($result_examen,MYSQLI_ASSOC))
	        {
	       	?>
	        <li class="row">
	          <div class="column">
	            <?php echo $i; ?>
	          </div>

	          <div class="column">
	            <?php echo $row_examen['grupa'];?>
	          </div>

	          <div class="column">
	            <?php echo $row_examen['nume_materie'];?>
	          </div>

	          <div class="column">
	            <?php echo $row_examen['data'];?>
	          </div>

	          <div class="column">
	            <?php echo $row_examen['sala'];?>
	          </div>

						<div class="column">
	            <?php echo "<a class='red_text button_yellow' href='sterge_examen.php?id_examen=".$row_examen['id_examen']. "'>Șterge</a>";?>
	          </div>

						<div class="column">
	            <?php echo "<a class='blue_text button_yellow' href='form_modifica_examen.php?id_examen=".$row_examen['id_examen']. "'>Modifică</a>";?>
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
