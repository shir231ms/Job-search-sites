<?php 
	session_save_path("tm");
	session_start();
	//echo $_POST['revise'];
	$db_host= "dbhome.cs.nctu.edu.tw";
	$db_name= "scyuan1221_cs";
	$db_user= "scyuan1221_cs";
	$db_password= "09931221";
	$dsn= "mysql:host=$db_host;dbname=$db_name";
	$db= new PDO($dsn, $db_user, $db_password);
	
	$sqlee="DELETE FROM `result`"."WHERE `id`=?";
	$sthee=$db->prepare($sqlee);
	$sthee->execute(array($_POST['revise']));
	
	header('location: login_employer.php');
?>				
		
	