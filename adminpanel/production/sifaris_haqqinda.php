<?php 
include 'baglan.php';
$sifarisSorgu1=$db->prepare("select * from sifarisler where sifaris_id=:sifaris_id");

$sifarisSorgu1->execute(array(
	'sifaris_id'=>$_POST['sifaris_id']
));

$sifarisCek1=$sifarisSorgu1->fetch(PDO::FETCH_ASSOC);
echo $sifarisCek1['sifaris_haqqinda'];
?>