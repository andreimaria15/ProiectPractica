<?php
include("conectare.php");

if (mysqli_query($conn, "insert into bucatari (id_bucatar,nume,varsta,id_scoala,ani_experienta,stele) 
					 values (NULL,'".$_POST["nume"]."','".$_POST["varsta"]."','".$_POST["id_scoala"]."','".$_POST["experienta"]."','".$_POST["stele"]."')"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>