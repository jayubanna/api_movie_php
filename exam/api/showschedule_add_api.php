<?php

   include '../config.php';


   header('Access-Control-Allow-Methods:POST');
   header('Contect-Type:application/json');


   if($_SERVER['REQUEST_METHOD']=='POST')
   {
     $config=new Config();

     $m_id=$_POST['m_id'];
     $sr_id=$_POST['sr_id'];

     
     $res=$config->insertschedul($m_id,$sr_id);

    if($res)
    {
      $arr['msg']="schedul insert to successfully...";
    }
    else{
        $arr['msg']="schedul insert to failed...";
    }
   }
   else{
    $arr['msg']="only request allowed POST...";

   }

   echo json_encode($arr);
?>