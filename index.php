<?php

use App\Controllers\PhoneManagers;

require __DIR__ . "/vendor/autoload.php";

$phoneManagers = new PhoneManagers('data.json');
$phones = $phoneManagers->displayPhone();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child() {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<a href="src/Views/addProduct.php">Add Products</a>
<table>
    <tr>
        <th>STT</th>
        <th>PHONE</th>
        <th>PRICE</th>
        <th>COLOR</th>
        <th>IMAGES</th>
        <th>STATUS</th>
    </tr>
    <?php foreach ($phones as $key => $phone): ?>
        <tr>
            <td><?php echo $phone->getId() ?></td>
            <td><?php echo $phone->getPhone() ?></td>
            <td><?php echo $phone->getPrice() ?></td>
            <td><?php echo $phone->getColor() ?></td>
            <td><img style="width: 75px;height: 75px" src="<?php echo $phone->getImage() ?>"</td>
            <td><?php echo $phone->getStatus() ?></td>
            <td><a href="src/Action/deleteProduct.php?id=<?php echo $key ?>">Delete</a></td>
            <td><a href="src/Views/updateProduct.php?id=<?php echo $key ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>


</table>


</body>
</html>