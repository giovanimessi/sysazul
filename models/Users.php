<?php

class Users extends Model{


    private $UserInfo;

    public function isLogged(){

        if(isset($_SESSION['luser']) && !empty($_SESSION['luser'])){
            return true;
        }else{
            return false;
        }

    }
    public function doLogin($email,$password){
     
      $sql = $this->pdo->prepare("SELECT * FROM users WHERE email =:email AND password = :password ");
       $sql->bindValue(":email",$email);
       $sql->bindValue(":password",md5($password));
       $sql->execute();
      

       if($sql->rowCount() > 0){
            $dados = $sql->fetch();
     

            $_SESSION["luser"] = $dados['id'];


            return true;
       }else{
           return false;
       }

    }
    public function setLoggedUser(){

        if(isset($_SESSION['luser']) && !empty($_SESSION['luser'])){
            $id = $_SESSION['luser'];

            $sql = $this->pdo->prepare("SELECT * FROM users WHERE id =:id ");
            $sql->bindValue(":id",$id);
            $sql->execute();

                    
            if($sql->rowCount() > 0){
           $this->UserInfo = $sql->fetch();

       }
      }
    }
    public function getCompany(){
        if(isset($this->UserInfo)){
        return $this->UserInfo['id_company'];
        }else{
            return 0;
        }
    }
    public function getName(){
        return $this->UserInfo['email'];
    }
}



?>