<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    use SoftDeletes;

    public function index()
    {
        return Movies::all();
    }

    public function delete(int $id)
    {
        $movie = Movies::find($id);
        $movie->delete();
    }

    public function post(Request $request)
    {
        return Movies::create($request->all());
    }
}
