<?php
include("conectare.php");

if (mysqli_query($conn, "update bucatari 
						set nume='".$_POST["nume"]."',
						varsta='".$_POST["varsta"]."',
						id_scoala='".$_POST["id_scoala"]."',
						ani_experienta='".$_POST["experienta"]."',
						stele='".$_POST["stele"]."' 
						where id_bucatar='".$_POST["id_bucatar"]."'"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>