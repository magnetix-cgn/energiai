<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_renders_energiai_content(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('EnergiAI');
        $response->assertSee('KI-gestuetztes Energiemonitoring');
        $response->assertSee('/assets/fulllogo_transparent.png');
    }
}
