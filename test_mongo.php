<?php
require __DIR__ . '/vendor/autoload.php';
$client=new MongoDB\Client("mongodb://localhost:27017");
$db = $client->rgukt; // database name
$users = $db->student;
$name="Akhil";
$id="N220923";
$a=$users->insertOne([
'name' => $name,
'id' => $id

]);
if($a){
	echo "inserted successfully";
}
?>