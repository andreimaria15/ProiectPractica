<?php
include("conectare.php");

$scoli=mysqli_query($conn,"select * from scoli_bucatari");
$bucatar_obj=mysqli_query($conn,"select * from bucatari where id_bucatar='".$_GET["id_bucatar"]."'");
$bucatar=mysqli_fetch_array($bucatar_obj);
?>
<html>
	<head>
		<title>Editare date bucatar</title>
	</head>
	
	<body>
		<h1> Modificare date despre <?=$bucatar["nume"] ?></h1>
		
		<form action="edit_done.php" method="post">
			<input type="hidden" name="id_bucatar" value="<?=$bucatar["id_bucatar"];?>" />
			<table border="0">
				<tr>
					<td>Nume</td>
					<td><input type="text" name="nume" value="<?=$bucatar["nume"] ?>"></td>
				</tr>
				<tr>
					<td>Varsta</td>
					<td><input type="number" step="1" name="varsta" value="<?=$bucatar["varsta"] ?>"></td>
				</tr>
				<tr>
					<td>Scoala absolvita</td>
					<td>
						<select name="id_scoala">
							<?php 	
							while($row=mysqli_fetch_array($scoli)){
							?>
								<option value="<?=$row["id_scoala"];?>" <?php
									if($bucatar["id_scoala"]==$row["id_scoala"]) echo 'selected="selected"';
								?>><?=$row["nume_scoala"]?></option>
							<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ani experienta</td>
					<td><input type="number" step="1" name="experienta" value="<?=$bucatar["ani_experienta"] ?>"></td>
				</tr>
				<tr>
                    <td>Stele Michelin</td>
                    <td>
						<?php
							if($bucatar["stele"]=="0") {
						?>
                        <input type="radio" value="0" name="stele" checked> <b>0 stele</b><br/>
						<?php
							}
							else {
						?>
						<input type="radio" value="0" name="stele"> <b>0 stele</b><br/>
						<?php
							}
						?>
						
						<?php
							if($bucatar["stele"]=="1") {
						?>
                        <input type="radio" value="1" name="stele" checked> <b>1 stea</b><br/>
						<?php
							}
							else {
						?>
						<input type="radio" value="1" name="stele"> <b>1 stea</b><br/>
						<?php
							}
						?>
                        
						<?php
							if($bucatar["stele"]=="2") {
						?>
                        <input type="radio" value="2" name="stele" checked> <b>2 stele</b><br/>
						<?php
							}
							else {
						?>
						<input type="radio" value="2" name="stele"> <b>2 stele</b><br/>
						<?php
							}
						?>
						
						<?php
							if($bucatar["stele"]=="3") {
						?>
                        <input type="radio" value="3" name="stele" checked> <b>3 stele</b>
						<?php
							}
							else {
						?>
						<input type="radio" value="3" name="stele"> <b>3 stele</b>
						<?php
							}
						?>
                    </td>
                </tr>
				<tr>
					<td colspan="2"><input type="submit"</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>