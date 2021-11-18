<?php

namespace Domain\Posts\Action;

use Domain\Posts\Port\PostRepository;

class DeletePost
{
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function delete(string $id)
    {
        $this->postRepository->delete($id);
    }
}
