<?php
require_once 'model.php';


$db = new PDO(
    'mysql:host=db;dbname=blog',
    'root',
    'password'
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$model = new ProductsModel($db);

$post = $model->getSingle($_GET['post']);

if ($post) {
        $singlePost = $post;
        echo '<article>';
        echo '<h1>' . $singlePost->getTitle() . '</h1>';
        echo '<p>' . $singlePost->getImageUrl() . '</p>';
        echo '<p>' . $singlePost->getContent() . '</p>';
        echo '</article>';
}
?>
