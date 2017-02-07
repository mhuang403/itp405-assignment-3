<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{
    public function index ()
    {
        return view('search');
    }

    public function results()
    {
        $search = request('title');

        $dvds = DB::table('dvds')
            ->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'ratings.id', '=', 'dvds.rating_id')
            ->join('genres', 'genres.id', '=', 'dvds.genre_id')
            ->where('title', 'LIKE', "%$search%")
            ->orderBy('title')
            ->get();

//        dd($dvds);

        return view('results', [
            'dvds' => $dvds,
            'search' => $search
        ]);
    }
}
