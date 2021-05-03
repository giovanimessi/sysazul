<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

          $usuarios = new  Users();
          if($usuarios->isLogged() == false){
              header("Location: ".BASE_URL."login");
          }
    
    }

    public function index() {
        $data = array();

        $u = new Users();
        $u->setLoggedUser();
        $c = new Company($u->getCompany());
       $data['company_name'] = $c->getName();
       $data['user_email'] = $u->getEmail();
        $this->loadTemplate('home', $data);
    }

}

