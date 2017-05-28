<?php
		include "header.php";
 ?>

  <?php

		 $id=$_GET['id_grupa'];

     include "connect.php";
     $sql="SELECT * FROM examen
					 JOIN materie ON materie.id_materie=examen.id_materie";
     $result_examen=mysqli_query($connection, $sql);
	?>

	<ul class="table">

		<li class="row">
			<div class="column table_head">
				<?php echo 'Nr. crt.'; ?>
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
		 while($row_examen=mysqli_fetch_array($result_examen,MYSQLI_ASSOC))
		 {
			 if($row_examen['id_grupa']==$id)
			 {
		?>
				 <li class="row">
					 <div class="column">
						 <?php echo $i; ?>
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

				 </li>
				<?php
					 $i++;
				}
			}
			?>
	</ul>

 <?php
 		include "footer.php";
  ?>
