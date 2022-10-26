<?php

namespace Tests\Unit\Services;

use PHPUnit\Framework\TestCase;
use App\Services\PostService;
use Mockery;

class PostServiceTest extends TestCase
{
    /**
     * @runInSeparateProcess
     * @return void
     */
    public function test_check_own_post()
    {
        $postService = new PostService();

        $mock = Mockery::mock('alias:App\Models\Post');
        $mock->shouldReceive('where->first')->andReturn((object)[
            'id' => 1,
            'user_id' => 1
        ]);

        $result = $postService->checkOwnPost(1,1);
        $this->assertTrue($result);

        $result = $postService->checkOwnPost(2, 1);
        $this->assertFalse($result);
    }
}
