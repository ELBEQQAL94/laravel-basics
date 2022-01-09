<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store()
    {
        $data = [
            'title' => 'title',
            'content' => 'content'
        ];
        $this->post('/posts', $data)->assertStatus(302)->assertSessionHas('status');
        $this->assertEquals(session('status'), 'Post was created');
    }
}
