<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class LocationsController extends Controller
{
    public function all(int $page)
    {
        $images = [
            'planet.png',
            'planet2.jpg',
            'planet3.jpg',
            'planet4.jpg',
            'planet5.jpg'
        ];

        $response = Http::get("https://rickandmortyapi.com/api/location/?page={$page}");

        return view('locations.all')->with('locations', json_decode($response, true))->with('next', $page + 1)->with('prev', $page - 1)->with('images', $images);
    }
}
