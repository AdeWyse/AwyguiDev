<?php

namespace bp\Entities;

class Project
{
    private int $id;
    private string $title;
    private string $content;
    private string $mainImage;
    private string $images;

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param string $mainImage
     * @param string $images
     */
    public function __construct(int $id, string $title, string $content, string $mainImage, string $images)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->mainImage = $mainImage;
        $this->images = $images;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMainImage(): string
    {
        return $this->mainImage;
    }

    /**
     * @param string $mainImage
     */
    public function setMainImage(string $mainImage): void
    {
        $this->mainImage = $mainImage;
    }

    /**
     * @return string
     */
    public function getImages(): string
    {
        return $this->images;
    }

    /**
     * @param string $images
     */
    public function setImages(string $images): void
    {
        $this->images = $images;
    }
}
