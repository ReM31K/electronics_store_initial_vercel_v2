<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * Перевіряє, чи працює головна сторінка.
     */
    public function test_HomePage_Is_Accessible()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200); // Перевіряємо, що статус відповіді 200
    }

    /**
     * Перевіряє, чи працює сторінка продуктів.
     */
    public function test_ProductsPage_Is_Accessible()
    {
        $response = $this->get(route('products.index'));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє, чи працює сторінка категорії.
     */
    public function test_CategoryPage_Is_Accessible()
    {
        $response = $this->get(route('category', ['type' => 'electronics']));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє успішність оформлення замовлення.
     */
    public function test_CheckoutSuccessPage_Is_Accessible()
    {
        $response = $this->get(route('checkout.success'));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє, чи працює статична сторінка "Про нас".
     */
    public function test_AboutPage_Is_Accessible()
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє, чи працює статична сторінка конфіденційності.
     */
    public function testP_PrivacyPage_Is_Accessible()
    {
        $response = $this->get(route('privacy'));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє, чи працює анонімний маршрут "foo".
     */
    public function test_FooRoute_Is_Accessible()
    {
        $response = $this->get(route('foo'));

        $response->assertStatus(200);
        $response->assertSee('Hello'); 
    }

    /**
     * Перевіряє, чи працює статична сторінка login
     */
    public function test_LoginRoute_Is_Accessible()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    /**
     * Перевіряє, чи працює статична сторінка register
     */
    public function test_RegisterRoute_Is_Accessible()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }
}
