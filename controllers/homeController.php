<?php
class homeController extends Controller {

    public function index() {
        $data = array();

        $this->loadTemplate('home', $data);
    }

}