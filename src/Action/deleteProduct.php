<?php

use App\Controllers\PhoneManagers;

include_once '../Controllers/PhoneManagers.php';

$phoneManager = new PhoneManagers('../../data.json');
$phoneManager->delete($id);
header('location: ../../index.php');
?>