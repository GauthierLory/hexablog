<?php

namespace Domain\Posts;

use Domain\Posts\Entity\Post;
use Domain\Posts\Port\PostRepository;

class InMemoryPostRepository implements postRepository
{
    private array $post = [];

    public function save(Post $post)
    {
        $this->posts[$post->getId()] = $post;
    }

    public function find(string $id): ?Post
    {
        return $this->posts[$id] ?? null;
    }

    public function update(Post $post)
    {
        $this->posts[$post->getId()] = $post;
    }


    public function delete(string $id)
    {
        unset($this->posts[$id]);
    }

    public function count(): int
    {
        return count($this->posts);
    }
}
