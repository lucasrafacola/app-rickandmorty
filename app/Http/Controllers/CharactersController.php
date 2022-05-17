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

    public function filter(Request $request)
    {

        $url = "https://rickandmortyapi.com/api/character/?";

        if (isset($request->name)) {

            $url .= "name={$request->name}&";

        }
        if (isset($request->status)) {

            $url .= "status={$request->status}&";

        }
        if (isset($request->species)) {

            $url .= "species={$request->species}&";

        }
        if (isset($request->type)) {

            $url .= "type={$request->type}&";

        }
        if (isset($request->gender)) {

            $url .= "gender={$request->gender}&";

        }

        $response = Http::get($url);

        return view('characters.filter')->with('characters', json_decode($response, true));
    }

    public function filterPag(string $parameters)
    {

        $url = "https://rickandmortyapi.com/api/character/?{$parameters}";

        $response = Http::get($url);

        return view('characters.filter')->with('characters', json_decode($response, true));
    }
}
