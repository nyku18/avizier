<?php

    $data=$_POST['data'];
    $sala=$_POST['sala'];
    $id_materie=$_POST['materie'];
    $id_grupa=$_POST['grupa'];

    include "connect.php";

    $sql="INSERT INTO examen(data,sala,id_materie,id_grupa) VALUES('$data', '$sala', '$id_materie', '$id_grupa')";
    $result=mysqli_query($connection, $sql);
    
 ?>
