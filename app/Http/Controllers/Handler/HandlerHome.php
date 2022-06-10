<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandlerHome extends Controller
{
    public function index()
    {
        $result = [];

        $response = [
            'content' => 'home',
            'data' => $result,
        ];

        return view('index', $response);
    }
}
