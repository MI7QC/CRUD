<?php
//connection a la BDD
require 'mesFunctionsSQL.php'; 

    $con = getDatabaseConnexion();
    $req = $con->prepare('SELECT * FROM utilisateurs');
    $req->execute();
    $data = $req->fetchAll();

 
   require 'class.csv.php'; 
   CSV::export($data,'utilisateurs');
?>