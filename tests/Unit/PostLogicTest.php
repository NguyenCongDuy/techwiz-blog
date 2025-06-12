<?php

namespace Tests\Unit;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PostLogicTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]

    public function test_post_belongs_to_user()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $post->user);
        $this->assertEquals($user->id, $post->user->id);
    }

    #[\PHPUnit\Framework\Attributes\Test]

    public function test_slug_is_generated_from_title()
    {
        $post = Post::factory()->create(['title' => 'Bài viết Laravel cơ bản']);

        $this->assertStringContainsString('bai-viet-laravel-co-ban', $post->slug);
    }
}
