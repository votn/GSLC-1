<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        $postMap = Map::all();
        return view('home', compact('postMap'));
    }
}
