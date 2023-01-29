<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function index()
    {
        return view('points.index');
    }

    public function show($id)
    {
        $point = Point::find($id);
        return view('points.show')->with(['point' => $point]);
    }
}
