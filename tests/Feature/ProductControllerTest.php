<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Price;
use App\Models\Product;
use Tests\TestCase;
use App\Models\User;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    // index
    public function test_index_products(): void
    {
        $user = User::factory()->create();
        $this->assertCount(0, $user->tokens);
        $this->actingAs($user);

        Product::factory()->count(10)->create();

        $response = $this->get('/api/products');

        $response->assertStatus(200);

        $response->assertJsonCount(10);
    }

    // show
    public function test_show_product(): void
    {
        $user = User::factory()->create();
        $this->assertCount(0, $user->tokens);
        $this->actingAs($user);

        $product = Product::factory()->create();

        $response = $this->get('/api/products/'.$product->id);

        $response->assertStatus(200);

        $response->assertJsonCount(1);
    }


}
