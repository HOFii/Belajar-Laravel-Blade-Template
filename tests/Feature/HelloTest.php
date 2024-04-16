<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Gusti");
    }
    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("Gusti");
    }
    public function testHelloView()
    {
        $this->view("hello", ["name" => "Gusti"])
            ->assertSeeText("Gusti");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world", ["name" => "Gusti"])
            ->assertSeeText("Gusti");
    }
}
