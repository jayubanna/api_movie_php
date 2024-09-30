<?php

include '../config.php';


header('Access-Control-Allow-Methods:DELETE');
header('Contect-Type:application/json');


if($_SERVER['REQUEST_METHOD']=='DELETE')
{
  $config=new Config();

  $input=file_get_contents("php://input");
 
  parse_str($input,$_DELETE);

  $movie_id=$_DELETE['moive_id'];

  
  $res=$config->deletemovie($movie_id);

 if($res==1)
 {
   $arr['msg']="moviename DELETE to successfully...";
 }
 else{
     $arr['msg']="moviename DELETE to failed...";
 }
}
else{
 $arr['msg']="only request allowed DELETE...";

}

echo json_encode($arr);

?>