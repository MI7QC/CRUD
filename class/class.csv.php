<?php
class CSV{

     static function export($datas,$filename){
         header('Content-Type: text/csv;');
         header('Content-Disposition: attachement; filename="'.$filename.'.csv"');
       
         $i = 0;
         foreach($datas as $v){
             if($i == 0) {
                // var_dump($v);
                 echo '"'.implode('";"',array_keys($v)).'"'."\n";
                //  var_dump(array_keys($v));
             }
             echo '"'.implode('";"',$v).'"'."\n";
            //  var_dump($v);
             $i++;
         }
     }
}
?>
