<?php

namespace Domain\Posts\Port;

use  Domain\Posts\Entity\Post;

interface PostRepository
{
    public function save(Post $post);
    public function find(string $id): ?Post;
    public function update(Post $post);
    public function delete(string $id);
}
