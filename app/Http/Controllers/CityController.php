<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function getCity(CityRequest $cityRequest)
    {
        return 'ok';
    }
}
