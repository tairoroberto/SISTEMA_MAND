<?php
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];
$id = $_POST['id'];

// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=mandproj_DB', 'mandproj_userDB', 'mand@231');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

$sql = "DELETE from Eventos WHERE id=".$id;
$q = $bdd->prepare($sql);
$q->execute();
?>