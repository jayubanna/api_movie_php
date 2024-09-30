<?php

   include '../config.php';


   header('Access-Control-Allow-Methods:POST');
   header('Contect-Type:application/json');


   if($_SERVER['REQUEST_METHOD']=='POST')
   {
     $config=new Config();

     $name=$_POST['name'];
     $capacity=$_POST['capacity'];

     
     $res=$config->insertshowroom($moive_title,$moive_director);

    if($res)
    {
      $arr['msg']="moviename insert to successfully...";
    }
    else{
        $arr['msg']="moviename insert to failed...";
    }
   }
   else{
    $arr['msg']="only request allowed POST...";

   }

   echo json_encode($arr);
?>