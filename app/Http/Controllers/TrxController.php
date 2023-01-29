<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TrxController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        return view('transactions.index')->with(['user' => $user]);
    }
}
