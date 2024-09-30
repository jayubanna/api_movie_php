<?php

   include '../config.php';


   header('Access-Control-Allow-Methods:PUT,PATCH');
   header('Contect-Type:application/json');


   if($_SERVER['REQUEST_METHOD']=='PUT' || $_SERVER['REQUEST_METHOD']=='PATCH')
   {
     $config=new Config();

     $input=file_get_contents("php://input");

     parse_str($input,$_UPDATE);

     $moive_title=$_UPDATE['movie_title'];
     $moive_director=$_UPDATE['moive_director'];
     $moive_id=$_UPDATE['movie_id'];

     
    $res=$config->movieupdate($movie_title,$movie_director,$movie_id);

    if($res==1)
    {
      $arr['msg']="moviename update to successfully...";
    }
    else{
        $arr['msg']="moviename update to failed...";
    }
   }
   else{
    $arr['msg']="only request allowed PUT AND PATCH...";
   }

   echo json_encode($arr);
?>