
<?php 
	$nom=$_POST["nom"];
	$ape=$_POST["ape"];
	$user=$_POST["user"];
	$corr=$_POST["corr"];
	$contr=$_POST["contr"];
	$repcontr=$_POST["repcontr"];
	$db=mysql_connect("localhost","root","");
	mysql_select_db("bdngsh",$db);
	mysql_query("insert into cliente values('$nom','$ape','$user','$corr','$contr','$repcontr')");
	
?>
