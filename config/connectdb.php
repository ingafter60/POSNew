<?php 

try {
	$pdo = new PDO('mysql:host=localhost; dbname=pos_inventory_tika', 'root', '');
	// echo "Db connected";
}catch(PDOException $f){
	echo $f->getMessage();
}