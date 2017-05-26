<?php
		include "header.php";
 ?>

		<form action=modifica_examen.php method=POST>
			<input type="hidden" name="id_examen" value="<?php echo $_GET['id_examen']; ?>">

			<?php
				include "connect.php";
				$sql="SELECT * FROM examen WHERE id_examen=" . $_GET['id_examen'];
				$result_examen=mysqli_query($connection, $sql);
				$row_examen=mysqli_fetch_array($result_examen,MYSQLI_ASSOC);
			?>

      <label>Grupa </label>
        <?php
          $sql="SELECT * FROM grupa";
          $result_grupa=mysqli_query($connection, $sql);

          if($result_grupa)
          {
            ?>
            <select name="grupa" required>
              <option value=""></option>
              <?php
      					while($row_grupa=mysqli_fetch_array($result_grupa,MYSQLI_ASSOC))
      					{
      				?>
                  <option value="<?php echo $row_grupa['id_grupa']; ?>"<?php if($row_examen['id_grupa']==$row_grupa['id_grupa']) echo "selected"; ?>><?php echo $row_grupa['grupa']; ?></option>
          <?php } ?>
            </select>
        <?php } ?>

		<label>Materia </label>
      <?php
        $sql="SELECT * FROM materie";
        $result_materie=mysqli_query($connection, $sql);

        if($result_materie)
        {
          ?>
          <select name="materie" required>
            <option value=""></option>
            <?php
    					while($row_materie=mysqli_fetch_array($result_materie,MYSQLI_ASSOC))
    					{
    				?>
                <option value="<?php echo $row_materie['id_materie']; ?>"<?php if($row_examen['id_materie']==$row_materie['id_materie']) echo 'selected'; ?>><?php echo $row_materie['nume_materie']; ?></option>
        <?php } ?>
          </select>
      <?php } ?>

		<label>Data </label> <input type=date name="data" required value="<?php echo $row_examen['data']; ?>"> <br>

    <label>Sala </label> <input type=text name="sala" required value="<?php echo $row_examen['sala']; ?>"> <br>

		<input class="button" type=submit value=MODIFICĂ>

	</form>

<?php
		include "footer.php";
 ?>
