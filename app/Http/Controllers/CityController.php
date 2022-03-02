<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;
use App\Models\City;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{
    //
    public function getCity(CityRequest $cityRequest): JsonResponse
    {
        $cityModel = new City;
        $cities = $cityModel->getCity($cityRequest->input('name'))->pluck('name');
        return response()->json(['cities' => $cities->toArray()], 200);
    }
}
