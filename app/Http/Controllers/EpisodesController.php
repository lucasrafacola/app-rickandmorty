<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EpisodesController extends Controller
{
    public function all(int $page)
    {
        $response = Http::get("https://rickandmortyapi.com/api/episode/?page={$page}");

        return view('episodes.all')->with('episodes', json_decode($response, true))->with('next', $page + 1)->with('prev', $page - 1);
    }
}
