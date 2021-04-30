<?php

class LoginController extends controller{

      public function index(){
          $data = array();

          if(isset($_POST['email']) && !empty($_POST['email'])){

            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
           
            $u = new Users();
            if($u->doLogin($email,$password)){
           
                header("Location: ".BASE_URL);

             }else{
                 $data ['error'] = 'ACESSO NEGADO!';
             }


             

          }

          $this->loadView('login', $data);
}
}



?>