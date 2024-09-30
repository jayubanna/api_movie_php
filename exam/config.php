<?php

  class Config{

    private $host='127.0.0.1';
    private $username='root';
    private $password='';
    private $dbname='movie';

    public $con;


    function initconnection()
    {
        $this->con=new mysqli($this->host,$this->username,$this->password,$this->dbname);
    }

    function insertmovie($movie_title,$movie_director)
    {
      $this->initconnection();

      $query="INSERT INTO moviedetail(movie_title,movie_director) VALUES('$movie_title','$movie_director');";

      $res=mysqli_query($this->con,$query);

       return $res;
    }

    function fetchallmovie()
    {
      $this->initconnection();

      $query="SELECT *FROM moviedetail;";

      $res=mysqli_query($this->con,$query);

       return $res;
    }


    function deletemovie($movie_id)
    {
        $this->initconnection();

        $query="DELETE FROM moviedetail WHERE movie_id=$movie_id;";

        $res=mysqli_query($this->con,$query);
  
        return $res;
    }

    function movieupdate($movie_title,$movie_director,$movie_id)
    {
        $this->initconnection();
  
        $query="UPDATE moviedetail SET movie_title='$movie_title',movie_director='$movie_director' WHERE movie_id=$movie_id;";

        $res=mysqli_query($this->con,$query);
  
         return $res;

    }


    function insertshowroom($name,$capacity)    
    {
        $this->initconnection(); 

        $query="INSERT INTO showroom(name,capacity) VALUES($name,$capacity);";
  
        $res=mysqli_query($this->con,$query);
  
         return $res;
    }

    
  }






?>