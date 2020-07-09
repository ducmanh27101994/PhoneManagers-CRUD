<?php

use App\Controllers\PhoneManagers;
use App\Controllers\Phones;

include_once "../Controllers/PhoneManagers.php";
include_once "../Controllers/Phones.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_REQUEST['id'];
    $phone = $_POST['phone'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $image = $_POST['image'];
    $status = $_POST['status'];

    if (!empty($phone) && !empty($price) && !empty($color) && !empty($image) && !empty($status)) {
        $phones = new Phones($id, $phone, $price, $color, $image, $status);
        $phoneManagers = new PhoneManagers('../../data.json');
        $phoneManagers->update($id, $phones);

        header('location: ../../index.php');
    } else {
        echo "Vui lòng nhập đầy đủ thông tin";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>UPDATE SẢN PHẨM</h1>
<form method="post">
    <?php foreach ($phones as $key => $phone): ?>
        <input name="id" type="number" placeholder="<?php echo $phones->getId() ?>" value="<?php $phones->getId() ?>">
        <br>
    <?php endforeach; ?>
    <input name="phone" type="text" placeholder="Phone"><br>
    <input name="price" type="text" placeholder="Price"><br>
    <input name="color" type="text" placeholder="Color"><br>
    <input name="image" type="text" placeholder="Image"><br>
    <input name="status" type="text" placeholder="Status"><br><br>
    <button type="submit">Update Product</button>

</form>

</body>
</html>
