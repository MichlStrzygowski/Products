<?php

namespace Tests\Feature;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class PriceControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();

    }
public function test_create_price(): void
    {

        $user = User::factory()->create();
        $this->assertCount(0, $user->tokens);
        $this->actingAs($user);

        $product = Product::factory()->create();
        $response = $this->post('/api/products/'.$product->id.'/prices', [
            'version' => 'test',
            'price' => 10.546,
        ]);

        $response->assertStatus(201);
    }

   // delete
    public function test_delete_price(): void
    {
        $user = User::factory()->create();
        $this->assertCount(0, $user->tokens);
        $this->actingAs($user);

        $product = Product::factory()->create();
        $price = Price::factory()->create(['product_id' => $product->id]);

        $response = $this->delete('/api/products/'.$product->id.'/prices/'.$price->id);

        $response->assertStatus(204);
    }

    // update
    public function test_update_price(): void
    {
        $user = User::factory()->create();
        $this->assertCount(0, $user->tokens);
        $this->actingAs($user);

        $product = Product::factory()->create();
        $price = Price::factory()->create(['product_id' => $product->id]);

        $response = $this->put('/api/products/'.$product->id.'/prices/'.$price->id, [
            'version' => 'test',
            'price' => 10.546,
        ]);

        $response->assertStatus(200);
    }


}
