<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=s459276_saglamyasam",'s459276_saglamyasam','13545762');
	//echo "ok";
} catch (PDOException $e) {
	echo $e->getMesssage();
}
?>