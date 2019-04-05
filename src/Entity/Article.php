<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    // Getters & Setters
    public function getId()
    {
        return $this->id;
    }

    // Title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Body
    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }
}