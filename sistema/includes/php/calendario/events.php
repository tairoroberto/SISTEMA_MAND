<?php
// List of events
 $json = array();
 $idusuario = $_GET['idusuario'];

 // Query that retrieves events
 //$requete = "SELECT * FROM Eventos WHERE idusuario = $idusuario  ORDER BY id";
$requete = "SELECT * FROM Eventos ORDER BY id";

 // connection to the database
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=mandproj_DB', 'mandproj_userDB', 'mand@231');
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }
 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>