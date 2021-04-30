<?php

class Users extends Model{

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
       var_dump($sql);

       if($sql->rowCount() > 0){
            $dados = $sql->fetch();
     

            $_SESSION["luser"] = $dados['id'];


            return true;
       }else{
           return false;
       }

    }

}



?>