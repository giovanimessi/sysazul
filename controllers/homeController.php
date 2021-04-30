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

        $u = new Users(($_SESSION['luser']));
        $c = new Company($u->getCompany());
       $data['company_name'] = $c->getName();
        $this->loadTemplate('home', $data);
    }

}

