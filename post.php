<?php
$title = "Bosh sahifa";
require './includes/header.php';
require 'database.php';

$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement ->execute([$id]);
$post = $statement->fetch();

?>;

<div class="container mt-5">
    <h1 class=""><?=$post['title'] ?></h1>
    <p class="fs-5 col-md-8 "><?=$post['body'] ?></p>

    <hr class="col-3 col-md-2 mb-5">
    <small><?= $post['created_at'] ?></small>
</div>



<?php require './includes/footer.php'?>
