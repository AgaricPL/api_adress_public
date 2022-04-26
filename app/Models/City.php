<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $table="city";

    public function getCity(string $name)
    {
        return City::where('name', 'like', '%'. $name. '%')->limit(10);
    }

    public function getFirstCity()
    {
        return City::take(1)->first();
    }
}
