<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }


    public function Store(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }
}
