<?php

use Domain\Posts\Action\SavePost;
use Domain\Posts\Entity\Post;
use Domain\Posts\InMemoryPostRepository;
use PHPUnit\Framework\TestCase;

class CreatePostTest extends TestCase
{
    public function test_it_can_create_a_post()
    {
        // given we have a title and content
        $title = "title";
        $content = "content";

        // when i call the savepost class
        $repository = new InMemoryPostRepository;
        $savePost = new SavePost($repository);
        $post = $savePost->save($title, $content);


        $this->assertInstanceOf(Post::class, $post);

        // then i should find the post inside the data repository
        $this->assertEquals(1, $repository->count());
    }
}
