<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjecTest extends TestCase
{
    public function testInject()
    {
        $this->view("service-injection", ["name" => "Gusti"])
            ->assertSeeText("Hello Gusti");

    }
}
