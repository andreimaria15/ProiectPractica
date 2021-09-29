<?php
include("conectare.php");

$bucatari=mysqli_query($conn,"select b.*, s.nume_scoala 
							 from bucatari b
							 left join scoli_bucatari s on b.id_scoala=s.id_scoala");
?>
<html>
	<head>
		<title>Lista de bucatari</title>
	</head>
	
	<body>
		<h1>Lista de bucatari</h1>
		<?php
			if (isset($_SESSION["adaugat"]) && $_SESSION["adaugat"]==1){
				echo "<p>Succes!</p>";
				$_SESSION["adaugat"]=0;
			}
		?>
		<a href="add.php">Adaugare bucatar in lista</a>
		<ul type="circle">
			<?php
				while($row=mysqli_fetch_array($bucatari)){
			?>
				<li>
					<table width="1000px">
						<tr>
							<td><?=$row["nume"].", varsta ".$row["varsta"]." de ani, ".$row["ani_experienta"]." de ani de experienta, ".$row["stele"]." stele Michelin (scoala de bucatari ".$row["nume_scoala"].")";?></td>
							
							<td><a href="edit.php?id_bucatar=<?=$row["id_bucatar"]?>">Modificare</a></td>

							<td><a href="delete.php?id_bucatar=<?=$row["id_bucatar"]?>" onclick="return confirm('Sunteti sigur ca doriti sa stergeti bucatarul?')">Stergere</a></td>
						
						</tr>
					</table>
				</li>
			<?php 
				}
			?>
		</ul>
	</body>
</html>