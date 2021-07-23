<?php
require 'database.php';
class Users extends Dbh
{

    public function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
         
        return $stmt;
    }

}
    
