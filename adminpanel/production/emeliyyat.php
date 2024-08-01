<?php 
ob_start();
session_start();
include 'baglan.php';
//----------==========--------------LogIn-------------------------========------
if(isset($_POST['giriset']))
{
	$istifadeci_ad=$_POST['istifadeci_ad'];
	$istifadeci_sifre=md5($_POST['istifadeci_sifre']);
	if($istifadeci_ad && $istifadeci_sifre)
	{
		$girisSorgu=$db->prepare("SELECT * FROM admin WHERE istifadeci_ad=:istifadeci_ad AND istifadeci_sifre=:istifadeci_sifre");
		$girisSorgu->execute(array(
			'istifadeci_ad'=>$istifadeci_ad,
			'istifadeci_sifre'=>$istifadeci_sifre
		));
		$girisSay=$girisSorgu->rowCount();
		$girisCek=$girisSorgu->fetch(PDO::FETCH_ASSOC);
		if($girisSay>0)
		{
			$_SESSION['istifadeci_id']=$girisCek['istifadeci_id'];
			header("Location:index.php");
		}
		else
		{
			header("Location:login.php?durum=no");
		}
	}
}





//----------==========--------------Faq Yenileme-------------------------========------
if(isset($_POST['sifarisyenile']))
{
	
	$sifarisYenile=$db->prepare("UPDATE sifarisler SET sifaris_ad=:sifaris_ad,sifaris_seher=:sifaris_seher,sifaris_telefon=:sifaris_telefon,sifaris_haqqinda=:sifaris_haqqinda WHERE sifaris_id= :sifaris_id");
	$sifarisYenile->execute(array(
		'sifaris_ad'=>$_POST['sifaris_ad'],
		'sifaris_seher'=>$_POST['sifaris_seher'],
		'sifaris_telefon'=>$_POST['sifaris_telefon'],
		'sifaris_haqqinda'=>$_POST['sifaris_haqqinda'],
		'sifaris_id'=>$_POST['sifaris_id'],
	));
	if($sifarisYenile)
	{
		header("Location:sifaris.php?durumY=ok");
	}
	else
	{
		header("Location:sifaris.php?durumY=no");
	}


}




//----------==========--------------faq Elave Et-------------------------========------
if(isset($_POST['sifariselaveet']))
{
	$sifarisEl=$db->prepare("INSERT INTO sifarisler (sifaris_ad,sifaris_seher,sifaris_telefon,sifaris_haqqinda) VALUES(:sifaris_ad,:sifaris_seher,:sifaris_telefon,:sifaris_haqqinda)");
	$sifarisEl->execute(array(
		'sifaris_ad'=>$_POST['sifaris_ad'],
		'sifaris_seher'=>$_POST['sifaris_seher'],
		'sifaris_telefon'=>$_POST['sifaris_telefon'],
		'sifaris_haqqinda'=>$_POST['sifaris_haqqinda']
	));
	if($sifarisEl)
	{
		header("Location:sifaris.php?durumE=ok");
	}
	else
	{
		header("Location:sifaris.php?durumE=no");
	}
}



//----------==========--------------faq Sil-------------------------========-----
if($_GET['sifaris_id'])
{
	$id=$_GET['sifaris_id'];
	$sifarisSil=$db->prepare("DELETE FROM sifarisler WHERE sifaris_id=?");
	$sifarisSil->execute(array($id));

	if($sifarisSil)
	{
		header("Location:sifaris.php?durumS=ok");
	}
	else
	{
		header("Location:sifaris.php?durumS=no");
	}
}



//axtar
if(isset($_POST['axtar']))
{
	$axtarilan=$_POST['axtarilan'];

	header("Location:sifaris.php?axtarilan=$axtarilan");
}
?>