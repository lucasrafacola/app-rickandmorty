<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharactersController extends Controller
{
    public function all(int $page)
    {
        $response = Http::get("https://rickandmortyapi.com/api/character/?page={$page}");

        return view('characters.all')->with('characters', json_decode($response, true))->with('next', $page + 1)->with('prev', $page - 1);
    }
}
