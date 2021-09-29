<?php
include("conectare.php");

if (mysqli_query($conn, "delete from  bucatari where id_bucatar='".$_GET["id_bucatar"]."'"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>