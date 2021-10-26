<?php
/* put your database configs here */
class modelconfig {
   function data(){
       $host = 'localhost';
       $database = '';
       $user = 'root';
       $password = '';
       $values = [$database,$host,$user,$password];   
       return $values;     
   }     
   
}
