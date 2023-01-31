<?php

require_once ('connection.php');

print_r($_POST);
echo '</br>';
print_r($_FILES);

$title = $_POST['title'];
$id = $_POST['id'];
$description = $_POST['description'];
$body = $_POST['body'];


$sql = "UPDATE posts
       SET title = '$title',description = '$description', body = '$body'
       WHERE id = '$id'";

$newName = '';

if($_FILES['image']['size']){
    $image = $_FILES['image'];
    $newName = 'img/'.rand(1111,9999).$image['name'];
    copy($image['tmp_name'], $newName);

    $sql = "UPDATE posts
       SET title = '$title',description = '$description', body = '$body', image = '$newName'
       WHERE id = '$id'";
}

$connection->exec($sql);

header('Location:/');