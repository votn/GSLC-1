<?php

namespace App\Http\Controllers;

use App\Models\Legend;
use Illuminate\Http\Request;

class LegendController extends Controller
{
    public function index(){
        $postLegend = Legend::all();
        return view('legend', compact('postLegend'));
    }
}
