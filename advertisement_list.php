<?php

include('view/header.php'); 
include('view/navbar.php');
require_once 'view/advertisements_view.php';

$advertisement = new AdvertisementsView();
echo $advertisement->showAdvertisements();



?>


