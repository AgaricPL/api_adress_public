<?php
declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\City;
use App\Models\User;
use Database\Seeders\CitySeeder;
use PHPUnit\Runner\Version as PHPUnitVersion;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Testing\Fluent\AssertableJson;

// use PHPUnit\Framework\TestCase;

class CityTest extends TestCase
{

    use RefreshDatabase;


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_getFirstCity()
    {
        $this->seed([
            CitySeeder::class
        ]);
        $city = new City;
        $firstCity = $city->getFirstCity();
        $this->assertSame('Sierakowice Lewe', $firstCity->name);
    }

    /**
     * @dataProvider cityProvider
     */
    public function test_getCity($slug, $city)
    {
        // $this->seed([
        //     CitySeeder::class
        // ]);

        Sanctum::actingAs(
            User::factory()->create(),
            ['getCity']
        );

        City::factory()->create([
            'name' => $city
        ]);
        $cityResult = json_encode($city);

        $response = $this->postJson('/api/getCity', ['name' => $slug]);

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'cities' => [$city]
            ]);
    }

    public function cityProvider(): array
    {
        return [
            ['Łódź', 'Łódź'],
            ['Siera', 'Sierakowice Lewe'],
            ['Stare M ', 'Stare Miasto'],
        ];
    }

}
