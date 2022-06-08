<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HandlerRegister extends Controller
{
    public function store()
    {
        $token = csrf_token();
        $request = Request::create('/api/register', 'POST', ['_token' => $token]);
        $response = Route::dispatch($request);
        
        // return to your view

        return $response;
    }
}
