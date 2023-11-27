<?php

namespace Tests\Unit\Repositories;

use Tests\TestCase;
use App\Repositories\OrderRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Order;

class OrderRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function testGetAllOrders()
    {
        $repository = new OrderRepository();
        $orders = $repository->getAllOrders();

        $this->assertNotNull($orders);
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $orders);
        // $this->assertNotEmpty($orders);
    }
}
