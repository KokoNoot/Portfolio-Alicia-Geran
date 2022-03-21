<?php
include_once ("configPDO.php");
try{
    $dbh = new PDO ($dsn, $user, $password);
    $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    $msg = 'ERREUR PDO sans File' , $e->getFile() , 'L.' , $e->getLine(), ':', $e->getMessage();
    die($msg);
}

$sql = "SELECT nom, prenom, fonction From auteur"//
// echo "<br/> $sql <br/>";

try{
    $result = $dbh->query($sql);
    $row = $result->fetch(); //Afficher le nom prénom
//echo $row["nom"];
}

catch (Exception $e){
    $msg = 'ERREUR PDO dans File', $e->getFile(), 'L.' , $e->getLine(), ';', $e->getMessage();
}
?>