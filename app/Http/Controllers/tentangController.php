<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tentangController extends Controller
{
    public function index()
    {
        $data = DB::table('prodhukum')->get();
        return view('content/about', ['data' => $data]);
    }
}
