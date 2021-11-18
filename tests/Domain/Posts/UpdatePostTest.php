<?php

use Domain\Posts\Action\UpdatePost;
use Domain\Posts\Entity\Post;
use Domain\Posts\InMemoryPostRepository;
use PHPUnit\Framework\TestCase;

class UpdatePostTest extends TestCase
{
    public function test_it_can_update_a_post()
    {
        // given there is an existing post
        $repository = new InMemoryPostRepository();
        $post = new Post("MOCK_TITLE", "MOCK_CONTENT");
        $repository->save($post);

        // when i call UpdatePost with new post data
        $updatePost = new UpdatePost($repository);
        $updatePost->update($post->getId(), "UPDATED_TITLE", "UPDATED_CONTENT");

        // then the post inside the repository should have change
        $updatedPost = $repository->find($post->getId());
        $this->assertEquals("UPDATED_TITLE", $updatedPost->getTitle());
        $this->assertEquals("UPDATED_CONTENT", $updatedPost->getContent());
    }
}
