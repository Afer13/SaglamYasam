<?php 
ob_start();
session_start();
include 'baglan.php';

//----------==========--------------sifaris Elave Et-------------------------========------
if(isset($_POST['sifarisElaveEt']))
{
	$sifarisEl=$db->prepare("INSERT INTO sifarisler(sifaris_ad,sifaris_seher,sifaris_telefon) VALUES(:sifaris_ad,:sifaris_seher,:sifaris_telefon)");
	$sifarisEl->execute(array(
		'sifaris_ad'=>$_POST['sifaris_ad'],
		'sifaris_seher'=>$_POST['sifaris_seher'],
		'sifaris_telefon'=>$_POST['sifaris_telefon'],
	));
	//echo $_POST['sifaris_ad'].$_POST['sifaris_seher'].$_POST['sifaris_telefon'];
	if($sifarisEl)
	{
		header("Location:index.php?durumE=ok");
	}
	else
	{
		header("Location:index.php?durumE=no");
	}
}


?>