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

     <ul class="table">

       <?php
         while($row_examen=mysqli_fetch_array($result_examen,MYSQLI_ASSOC))
         {
       ?>
        <li class="row">
          <div class="column">
            <?php echo $row_examen['id_examen'];?>
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

        </li>
       <?php
         }

         ?>
     </ul>

 <?php
 		include "footer.php";
  ?>
