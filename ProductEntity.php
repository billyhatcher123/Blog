<?php
class ProductEntity
{
    private int $id;
    private string $name;
    private string $title;
    private string $content;
    private int $category_id;
    private string $image_url;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function getImageUrl(): string
    {
        return $this->image_url;
    }
}