<?php
class Users extends Model {

    public function verifyUser($number, $pass) {

        $sql = "SELECT * FROM users WHERE user_number = :unumber AND user_pass = :upass";
        $sql= $this->db->prepare($sql);
        $sql->bindValue(":unumber", $number);
        $sql->bindValue(":upass", md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

        //Vai verificar se existe usuário com este numero e esta senha.
    }

    public function createToken($unumber) {
        $token = md5(time().rand(0,9999).time().rand(0,9999));
        $sql = "UPDATE users SET user_token = :token WHERE user_number = :unumber";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":token", $token);
        $sql->bindValue(":unumber", $unumber);
        $sql->execute();

        return $token;
    }

}

?>