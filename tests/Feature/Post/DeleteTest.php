<?php

namespace Tests\Feature\Post;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Feeling;
use App\Models\About;


class DeleteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_successed()
    {
        $user = User::factory()->create();

        

        $post = Post::factory()->create();

        $this->actingAs($user);

        $response = $this->delete('/post/delete/' . $post->id);

        $response->assertRedirect('/post');
    }
}