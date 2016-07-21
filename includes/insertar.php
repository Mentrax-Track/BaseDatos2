<?php
 
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion a la base de datos
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=calendario', 'root', '');
 } catch(Exception $e) {
 exit('Imposibleconectar a la base de datos..!!!');
 }
 
$sql = "INSERT INTO reservas (title, start, end) VALUES (:title, :start, :end)";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end));
?>
