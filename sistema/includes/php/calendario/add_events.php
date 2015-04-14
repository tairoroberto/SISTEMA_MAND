<?php
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$idusuario = $_POST['idusuario'];
// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=mandproj_DB', 'mandproj_userDB', 'MandProj@231');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO Eventos (title, start, end, idusuario) VALUES (:title, :start, :end, :idusuario)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end,  ':idusuario'=>$idusuario));
?> 