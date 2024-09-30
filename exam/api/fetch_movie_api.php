<?php

   include '../config.php';


   header('Access-Control-Allow-Methods:GET');
   header('Contect-Type:application/json');


   if($_SERVER['REQUEST_METHOD']=='GET')
   {
     $config=new Config();
     
     $obj=$config->fetchallmovie();

     $respose=[];

     while($record=mysqli_fetch_assoc($obj))
     {
       array_push($respose,$record);
     }

     $arr['msg']=$respose;
   }
   else{
    $arr['msg']="only request allowed GET...";

   }

   echo json_encode($arr);
?>