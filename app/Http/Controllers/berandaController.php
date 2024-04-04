<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class berandaController extends Controller
{
    public function index()
    {
        $data = DB::table('opdlink')->get();
        return view('content/beranda', ['data' => $data]);
    }
}
