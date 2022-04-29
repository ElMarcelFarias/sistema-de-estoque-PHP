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
        $p = new Products();

        if(!empty($_POST['cod'])) {
            $cod = $_POST['cod'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $min_quantity = $_POST['min_quantity'];

            $p->addProduct($cod, $name, $price, $quantity, $min_quantity);
            header("Location: ".BASE_URL);
        }


        $this->loadTemplate('add', $data);

    }

}