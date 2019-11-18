<?php

   class BasesDonnees {
    private $host='localhost';
    private $dbname='dsi21_g2_2019';
    private $user='root';
    private $pwd='';
   public $cnx = null;
   public function connectDB(){
    try{
     $this->cnx =new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);
    } catch (PDOException $e) {
     echo $e->getMessage();
    }
    return $this->cnx;
   }
  

  }
   
     

?>