<?php 
require 'database.php';
class Advertisements extends Dbh
{

    public function getAdvertisements(){
        $sql = "SELECT advertisements.id, users.name, advertisements.title FROM users INNER JOIN advertisements ON users.id=advertisements.userid";
        $stmt = $this->connect()->query($sql);
        $stmt->execute();
         
        return $stmt;
    }
}