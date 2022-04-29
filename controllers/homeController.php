<?php
class homeController extends Controller {

    private $user;

    //Verificação se o usuário está logado.
    public function __construct() {
        parent::__construct();

        $this->user = new Users();
        if(!$this->user->checkLogin()) {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $data = array();
        
        $this->loadTemplate('home', $data);
    }

}