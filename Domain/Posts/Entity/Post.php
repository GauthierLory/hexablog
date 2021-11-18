<?php

namespace Domain\Posts\Entity;

use Ramsey\Uuid\Uuid;

class Post
{
    private string $id;
    private string $title;
    private string $content;

    public function __construct(string $title, string  $content)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->title = $title;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
