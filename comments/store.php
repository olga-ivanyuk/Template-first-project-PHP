<?php

require_once ('../connection.php');

$postId = $_POST['post_id'];
$text = $_POST['text'];

$sql = "INSERT INTO comments (text, post_id)
        VALUES ('$text', '$postId')";

if (isset($_POST['comment_id'])){
    $commentId = $_POST['comment_id'];
    $sql = "INSERT INTO comments (text, post_id, comment_id)
        VALUES ('$text', '$postId', '$commentId')";
}

$connection->exec($sql);

header('Location: ../post.php?id='.$postId);