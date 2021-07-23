<?php


include('view/header.php'); 
include('view/navbar.php');
require_once 'view/users_view.php';

$users = new UsersView();
echo $users->showUsers();


?>