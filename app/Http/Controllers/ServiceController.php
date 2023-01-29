<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit')->with(['service' => $service]);
    }
}
