<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
		<title> Avizier examene </title>
		<link rel="stylesheet" href="/avizier/css/style.css">
	</head>
	<body>
		<div class="header">
			<img src=img/facultate.png alt="Cladire facultate inginerie sibiu" />
			<img src=img/logo.png alt="Logo ULBS" />
		</div>

		<?php
				include "connect.php";
				$sql="SELECT * FROM specializare";
				$result_specializare=mysqli_query($connection, $sql);
		?>

		<ul>

			<?php
				while($row_specializare=mysqli_fetch_array($result_specializare,MYSQLI_ASSOC))
				{
			?>

				<li class="dropdown"><?php echo $row_specializare['nume_specializare'];?>
				<ul class="dropdown-content">

			<?php
					$sql="SELECT grupa, id_grupa FROM grupa WHERE id_specializare=".$row_specializare['id_specializare'];
					$result_grupa=mysqli_query($connection, $sql);
					while($row_grupa=mysqli_fetch_array($result_grupa,MYSQLI_ASSOC))
					{
			?>
						<li><?php echo "<a href='examene.php?id_grupa=".$row_grupa['id_grupa']."'>".$row_grupa['grupa']."</a>";?></li>
			<?php
					}
			?>
				</ul>
			</li>
			<?php
				}

				?>
		</ul>

	</body>

</html>
