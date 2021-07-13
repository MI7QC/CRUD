<?php
class CSV{

     static function export($datas,$filename){
         header('Content-Type: text/csv;');
         header('Content-Disposition: attachement; filename="'.$filename.'.csv"');
       

        echo '"'."nom".'";"'."prenom".'";"'."age".'";"'."cinema".'";"'."adresse".'"';
        echo "\n".'"'.$datas["nom"].'";"'.$datas["prenom"].'";"'.$datas["age"].'";"'.$datas["cinema"].'";"'.$datas["adresse"].'"';
       
     }
}
?>
