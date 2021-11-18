<?php

use Domain\Posts\Action\DeletePost;
use Domain\Posts\Action\UpdatePost;
use Domain\Posts\Entity\Post;
use Domain\Posts\InMemoryPostRepository;
use PHPUnit\Framework\TestCase;

class DeletePostTest extends TestCase
{
    public function test_it_can_delete_a_post()
    {
        // given there is no post in the repository
        $repository = new InMemoryPostRepository;
        $post = new Post("MOCK_TITLE", "MOCK_CONTENT");
        $repository->save($post);

        $deletedPost = new DeletePost($repository);
        $deletedPost->delete($post->getId());

        // when i call the UpdatePost;

        // then i should throw an PostNotFoundException
        $this->assertEquals(0, $repository->count());
    }
}
