<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Gusti",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Gusti")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Gusti",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Gusti")
            ->assertSee("readonly");
    }
}
