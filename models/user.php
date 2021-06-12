<?php

require_once('model.php');

class UserModel extends Model {

    /**
     * @param $username
     */
    public function getUserByUsername($username) {
        $query = $this->getDb()->prepare('SELECT * FROM `user` WHERE nombre = ?');
        $query->execute(array(($username)));
        return $query->fetch(PDO::FETCH_OBJ);
    }

     /**
     * @param $user $name
     */
    public function add($user, $pass) {

        $passEnc = password_hash($pass, PASSWORD_DEFAULT);
        
        $query = $this->getDb()->prepare("INSERT INTO user (nombre, password) VALUES (?, ?)");
        $query->execute([$user, $passEnc]);

    }
}