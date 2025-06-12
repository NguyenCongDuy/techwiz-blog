<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use PHPUnit\Framework\Attributes\Test;

class BlogApiTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function user_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Duy Dev',
            'email' => 'duy@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertDatabaseHas('users', [
            'email' => 'duy@example.com',
        ]);
    }

    #[Test]
    public function authenticated_user_can_create_post()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->post('/posts', [
            'title' => 'Bài viết test',
            'content' => 'Nội dung test',
            'status' => 'published',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('posts', [
            'title' => 'Bài viết test',
        ]);
    }

    #[Test]
    public function logged_in_user_can_comment_on_post()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->post("/posts/{$post->id}/comments", [
            'content' => 'Bình luận test',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('comments', [
            'content' => 'Bình luận test',
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);
    }

    #[Test]
    public function guest_cannot_access_api_without_token()
    {
        $response = $this->getJson('/api/posts');

        $response->assertUnauthorized();
    }

    #[Test]
    public function user_can_access_api_with_token()
    {
        Post::factory()->count(3)->create();
        
        $user = User::factory()->create();
        $token = $user->createToken('TestToken')->plainTextToken;

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/posts');

        $response->assertOk();
        
        $response->assertJsonStructure([
            'data', 'links',
            'current_page',
            'last_page',
            'per_page',
            'total'
        ]);
    }
}




