<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{

    public function getCity(CityRequest $cityRequest): JsonResponse
    {
        $cityModel = new City;
        $cities = $cityModel->getCity($cityRequest->input('name'))->pluck('name');
        return response()->json(['cities' => $cities->toArray()], 200);
    }

    public function getFirstCity()
    {
        $city = new City();
        return $city->getFirstCity();
    }
}
