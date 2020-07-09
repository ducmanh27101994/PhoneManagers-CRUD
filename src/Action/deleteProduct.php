<?php

use App\Controllers\PhoneManagers;
$id = $_REQUEST['id'];
include_once '../Controllers/PhoneManagers.php';

$phoneManager = new PhoneManagers('../../data.json');
$phoneManager->delete($id);
header('location: ../../index.php');
?>