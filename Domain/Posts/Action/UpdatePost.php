<?php

namespace Domain\Posts\Action;

use Domain\Posts\Exception\PostNotFoundException;
use Domain\Posts\Port\PostRepository;

class UpdatePost
{
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function update(string $id, string $title, string $content)
    {
        $post = $this->postRepository->find($id);

        if (!$post) {
            throw new PostNotFoundException();
        }
        $post->setTitle($title)->setContent($content);

        $this->postRepository->update($post);
    }
}
