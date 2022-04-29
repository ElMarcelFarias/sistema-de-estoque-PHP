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

    public function addProduct($cod, $name, $price, $quantity, $min_quantity) {
        
        $sql = "INSERT INTO products (cod, name, price, quantity, min_quantity) VALUES (:cod, :name, :price, :quantity, :min_quantity)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":cod", $cod);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quantity", $quantity);
        $sql->bindValue(":min_quantity", $min_quantity);
        $sql->execute();
    }

    public function getProduct($id) {
        $array = array();
        $sql = "SELECT * FROM products WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount > 0 ){

            $array = $sql->fetch();

        }
        return $array;
    }
}