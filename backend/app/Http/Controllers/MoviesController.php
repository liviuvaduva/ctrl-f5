<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    use SoftDeletes;

    public function index()
    {
        return Movie::all();
    }

    public function delete(int $id)
    {
        $movie = Movie::find($id);
        $movie->delete();
    }

    public function post(Request $request)
    {
        return Movie::create($request->all());
    }
}
