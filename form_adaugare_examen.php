<?php
		include "header.php";
 ?>

		<form action=adaugare_examen.php method=POST>
      <label>Grupa </label>
        <?php
          include "connect.php";
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
                  <option value="<?php echo $row_grupa['id_grupa']; ?>"><?php echo $row_grupa['grupa']; ?></option>
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
                <option value="<?php echo $row_materie['id_materie']; ?>"><?php echo $row_materie['nume_materie']; ?></option>
        <?php } ?>
          </select>
      <?php } ?>

		<label>Data </label> <input type=date name="data" required> <br>

    <label>Sala </label> <input type=text name="sala" required> <br>

		<input class="button" type=submit value=ADAUGĂ>

	</form>

<?php
		include "footer.php";
 ?>
