<?php

require_once ('connection.php');

//print_r($_POST);
//echo '</br>';
//print_r($_FILES);

$title = $_POST['title'];
$view = $_POST['view'];
$description = $_POST['description'];
$body = $_POST['body'];

$newName = '';

if($_FILES['image']['size']){
    $image = $_FILES['image'];
    $newName = 'img/'.rand(1111,9999).$image['name'];
    copy($image['tmp_name'], $newName);
}


$sql = "INSERT INTO posts(title, description, body, image, view)
        VALUES ('$title','$description','$body','$newName','$view')";

$connection->exec($sql);

header('Location:/');