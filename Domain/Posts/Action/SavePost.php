<?php

namespace Domain\Posts\Action;

use Domain\Posts\Entity\Post;
use Domain\Posts\Port\PostRepository;

class SavePost
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function save(string $title, string $content): Post
    {
        $post = new Post($title, $content);
        $this->postRepository->save($post);

        return $post;
    }
}
