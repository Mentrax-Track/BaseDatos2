
<?php
// liste de eventos
 $json = array();
 // requiere recuperar los eventos
 $requete = "SELECT * FROM reservas ORDER BY id";
 
 // connexion a la base de datos
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=calendario', 'root', '');
 } catch(Exception $e) {
 exit('Imposibleconectar a la base de datos..!!!');
 }
 
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
 
 
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
 
?>