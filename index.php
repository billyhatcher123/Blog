<?php
require_once 'model.php';


    $db = new PDO(
        'mysql:host=db;dbname=blog',
        'root',
        'password'
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$model = new ProductsModel($db);
$posts = $model->getAll();


foreach ($posts as $post) {
    echo '<article>';
    echo '<a href="blog.php?post=' . $post->getId() . '">';
    echo '<h3>' . $post->getTitle() . '</h3>';
    echo '<img src="' . $post->getImageUrl() . '" alt="" />';
    echo '</a>';
    echo '</article>';
}
?>





