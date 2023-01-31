<?php

require_once ('connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM posts
        WHERE id = '$id'";

$connection->exec($sql);

header('Location:/');