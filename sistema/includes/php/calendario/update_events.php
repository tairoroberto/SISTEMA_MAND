<?php

/* Values received via ajax */
$id = $_POST['id'];
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
 // update the records
$sql = "UPDATE Eventos SET title=?, start=?, end=? WHERE id=? AND idusuario=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id,$idusuario));
?>