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
        $p = new Products();

        $data['list'] = $p->getProducts();
        $this->loadTemplate('home', $data);
    }

    public function add() {
        $data = array();

        
        $this->loadTemplate('add', $data);

    }

}