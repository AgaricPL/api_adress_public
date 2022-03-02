<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table="city";

    public function getCity(string $name)
    {
        return City::where('name', 'like', '%'. $name. '%');
    }

    public function getFirstCity(): self
    {
        return City::all()->first();
    }
}
