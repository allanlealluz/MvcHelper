<?php
require_once 'modelconfig.php';
class Model extends modelconfig{
    private $pdo;
   function connection(){
       try{
         $data = $this->data();
         var_dump($data);
         $this->pdo = new PDO('mysql:dbname:'.$data[0].';host='.$data[1],$data[2],$data[3]);  
       } catch (Exception $ex) {
           echo $ex->getCode(),$ex->getMessage(),$ex->getLine();  
       }
       
               
   }
}