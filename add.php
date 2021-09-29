<?php
include("conectare.php");

$scoli=mysqli_query($conn,"select * from scoli_bucatari");

?>
<html>
	<head>
		<title>Adaugare bucatar</title>
	</head>
	
	<body>
		<h1>Adaugare bucatar</h1>
		
		<form action="add_done.php" method="post">
			<table border="0">
				<tr>
					<td>Nume</td>
					<td><input type="text" name="nume"></td>
				</tr>
				<tr>
					<td>Varsta</td>
					<td><input type="number" step="1" name="varsta"></td>
				</tr>
				<tr>
					<td>Scoala absolvita</td>
					<td>
						<select name="id_scoala">
							<?php 	
							while($row=mysqli_fetch_array($scoli)){
							?>
								<option value="<?=$row["id_scoala"];?>"><?=$row["nume_scoala"]?></option>
							<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ani experienta</td>
					<td><input type="number" step="1" name="experienta"></td>
				</tr>
				<tr>
                    <td>Stele Michelin</td>
                    <td>
						<input type="radio" value="0" name="stele"> <b>0 stele</b><br/>
						<input type="radio" value="1" name="stele"> <b>1 stea</b><br/>
						<input type="radio" value="2" name="stele"> <b>2 stele</b><br/>
						<input type="radio" value="3" name="stele"> <b>3 stele</b>
                    </td>
                </tr>
				<tr>
                    <td colspan="2">
                        <input type="submit">
                    </td>
                </tr>
				
			</table>
		</form>
	</body>
</html>