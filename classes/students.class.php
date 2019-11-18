<?php
require 'dbconnect.class.php';
class students{
    private $cnx;
    public function __construct()
    {
        $db= new BasesDonnees ;
        $this->cnx =$db->connectDB();

    }
    public function readAllStudents()
    {
        try {
            
$req='SELECT * FROM students';
$result =$this->cnx->prepare($req);
$result->execute();
return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
    }
public function createStudents($firstname,$lastname,$email,$phone){

    try {
            
        $req ="INSERT INTO students(id,firstname,lastname,email,phone) VALUES (null,:clt_firstname,:clt_lastname,:clt_email,:clt_phone)";
        $result =$this->cnx->prepare($req);

        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;
                } catch (PDOException $ex) {
                  echo $ex->getMessage()  ;
                }
}

public function updateStudents($firstname,$lastname,$email,$phone){

    try {
            
        $req =" UPDATE students 
        SET firstname= :clt_firstname,
            lastname= :clt_lastname,
            email= :clt_email,
            phone= :clt_phone,
        where id= :clt_id";        
        $result =$this->cnx->prepare($req);
        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;
                } catch (PDOException $ex) {
                  echo $ex->getMessage()  ;
                }
}

public function storeStudents(){
  
    try {
            
        $req='INSERT INTO students(firstname,lastname,email,phone) VALUES (null,:clt_firstname,:clt_lastname,:clt_email,:clt_phone)';
        $result =$this->cnx->prepare($req);
       
        $result->bindParam (":clt_firstname", $firstname);
        $result->bindParam (":clt_lastname", $lastname);
        $result->bindParam (":clt_email", $email);
        $result->bindParam (":clt_phone", $phone);
        $result->execute();
        return $result;

                } catch (PDOException $e) {
                  echo $e->getMessage()  ;
                }
            }
public function deleteClient($id){
  try {
    $sql= 'DELETE FROM students WHERE id =clt_id';
    $result =$this->cnx->prepare($sql);
    $result->bindparam(":clt_id",$id);
    $result-> execute() ;
    return $result;

  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
}
         
?>
