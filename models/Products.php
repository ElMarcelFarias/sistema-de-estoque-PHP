<?php
class Products extends Model {

    public function getProducts() {
        $array = array();
        
        $sql = "SELECT * FROM products";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}