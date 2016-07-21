<?php
 
/* VALUES */
$id=$_POST['id'];
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];
 
// connexion a la base de datos
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=calendario', 'root', '');
 } catch(Exception $e) {
 exit('Imposibleconectar a la base de datos..!!!');
 }
 
$sql = "UPDATE reservas SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));
 
?>

