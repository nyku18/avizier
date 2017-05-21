<?php
		include "header.php";
 ?>

   <?php
       include "connect.php";
       $sql="SELECT id_examen,data,sala,nume_materie,grupa FROM examen
              JOIN materie ON materie.id_materie=examen.id_materie
              JOIN grupa ON grupa.id_grupa=examen.id_grupa";
       $result_examen=mysqli_query($connection, $sql);
   ?>

	 <h1>EXAMENE</h1>

     <ul class="table">

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
	            <?php echo "<a class='red_text' href='sterge_examen.php?id_examen=".$row_examen['id_examen']. "'>Șterge</a>";?>
	          </div>

						<div class="column">
	            <?php echo "<a class='blue_text' href='form_modifica_examen.php?id_examen=".$row_examen['id_examen']. "'>Modifică</a>";?>
	          </div>

	        </li>
	       <?php
				 		$i++;
	       }
 ?>
     </ul>

 <?php
 		include "footer.php";
  ?>
