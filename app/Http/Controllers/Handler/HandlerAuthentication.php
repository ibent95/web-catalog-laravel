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

        return view('sign-up', $response);
    }

    public function register(Request $request)
    {
        $statusCode = 400;
        $response = [
            'content' => 'home',
            'messages' => [],
            'data' => [],
        ];
        $redirectUrl = route('view.home');

        $token = csrf_token();
        $registerHttpClient = Request::create('/api/register', 'POST', $request->all());
        $registerApiResponse = Route::dispatch($registerHttpClient);

        $statusCode = $registerApiResponse->getStatusCode();

        $response['messages'] = collect($registerApiResponse->getData()->message)->map(function ($message) use ($statusCode) {
            return [
                'type' => ($statusCode == 200) ? 'success' : 'danger',
                'message' => $message,
            ];
        });

        //$response['messages'] = $registerApiResponse->getData()->message;

        if ($statusCode != 200) {
            $redirectUrl = route('view.sign-up');
        }

        return redirect($redirectUrl)->with($response);
    }

    public function signIn()
    {
        $result = [];

        $response = [
            'content' => 'home',
            'data' => $result,
        ];

        return view('sign-in', $response);
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