<?php

   include '../config.php';


   header('Access-Control-Allow-Methods:POST');
   header('Contect-Type:application/json');


   if($_SERVER['REQUEST_METHOD']=='POST')
   {
     $config=new Config();

     $moive_title=$_POST['movie_title'];
     $moive_director=$_POST['moive_director'];

     
     $res=$config->insertmovie($moive_title,$moive_director);

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