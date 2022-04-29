<?php
class homeController extends Controller {

    public function index() {
        $data = array();

        print_r($_SESSION['token']);
        
        $this->loadTemplate('home', $data);
    }

}