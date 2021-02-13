<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index()
    {
        return Artists::all();
    }
}
