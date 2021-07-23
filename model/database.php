<?php
class Dbh{
   private  $host = 'localhost';
   private  $user = 'root';
   private $pwd = '';
   private $dbName ='advertisement';

    protected function connect()
        {
            $dsn ='mysql:host=' . $this->host . ';dbname='. $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
}
/*try{
    $db = new PDO($dsn, $username);
} catch (PDOException $e){
    $error = "Database error: ";
    $error .= $e->getMessage();
    include('view/error.php');
    exit();
}
*/