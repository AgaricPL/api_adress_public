<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetCity()
    {
        $this->artisan('db', ['param' => 'seed']);
        $this->assertTrue(true);
    }
}
