<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HandlerAuthentication extends Controller
{

    public function signUp()
    {
        $result = [];

        $response = [
            'content' => 'home',
            'data' => $result,
        ];

        return view('signup', $response);
    }

    public function register()
    {
        $token = csrf_token();
        $request = Request::create('/api/register', 'POST', ['_token' => $token]);

        $response = Route::dispatch($request);
        $response['content'] = 'home';

        return view('index', $response);;
    }

    public function signIn()
    {
        $result = [];

        $response = [
            'content' => 'home',
            'data' => $result,
        ];

        return view('signin', $response);
    }

    public function login()
    {
        $token = csrf_token();
        $request = Request::create('/api/login', 'POST', ['_token' => $token]);

        $response = Route::dispatch($request);
        $response['content'] = 'home';

        return view('index', $response);;
    }

}