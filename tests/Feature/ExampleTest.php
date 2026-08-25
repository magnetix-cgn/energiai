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
        $response->assertSee('KI-gestütztes Energiemanagement');
        $response->assertSee('Energie verstehen. Intelligent handeln.');
        $response->assertSee('/assets/fulllogo_transparent.png');
        $response->assertSee('Picologic GmbH · Weyertal 5 · 50837 Köln · hello@energiai.de');
        $response->assertSee('/impressum?lang=de', false);
    }

    public function test_homepage_renders_english_version(): void
    {
        $response = $this->get('/?lang=en');

        $response->assertStatus(200);
        $response->assertSee('AI-powered energy management');
        $response->assertSee('Understand energy. Act intelligently.');
        $response->assertSee('DE');
    }

    public function test_live_page_renders_demo_data_quality(): void
    {
        $response = $this->get('/live');

        $response->assertStatus(200);
        $response->assertSee('Öffentliche Live-Demo');
        $response->assertSee('Ausgeschlossen');
        $response->assertSee('2.013.530,55 °C');
    }

    public function test_impressum_renders_provider_details(): void
    {
        $response = $this->get('/impressum');

        $response->assertStatus(200);
        $response->assertSee('Impressum');
        $response->assertSee('Picologic GmbH');
        $response->assertSee('Weyertal 5');
        $response->assertSee('50837 Köln');
        $response->assertSee('hello@energiai.de');
        $response->assertSee('Geschäftsführer: Thiemo Komischke');
        $response->assertSee('Registergericht: Amtsgericht Koblenz');
        $response->assertSee('Registernummer: HRB 25213');
    }
}
