<?php
//connection a la BDD
require 'mesFunctionsSQL.php'; 

    $con = getDatabaseConnexion();
    $req = $con->prepare('SELECT * FROM psi');
    $req->execute();
    $data = $req->fetchAll();

   require '../class/class.csv.php'; 
   CSV::export($data,'Psi');
?>