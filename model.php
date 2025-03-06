<?php

require_once "ProductEntity.php";
class ProductsModel
{
    public PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        $query = 'SELECT `id`, `title`, `image_url` FROM `posts`';
        $result = $this->db->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS, ProductEntity::class);
    }


public function getSingle($postId): ProductEntity
{
    $query = $this->db->prepare("SELECT `id`, `title`, `image_url`, `content` FROM `posts` WHERE `id` = :id;");
    $query->execute(['id' => $postId]);
    return $query->fetchObject(ProductEntity::class);
}
}