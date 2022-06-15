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
            'content' => 'authentication/sign-up',
            'data' => $result,
        ];

        return view('authentication-index', $response);
    }

    public function register(Request $request)
    {
        $statusCode = 400;
        $response = [
            'content' => 'authentication/sign-up',
            'messages' => [],
            'data' => [],
        ];
        $indexContainer = 'index';

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
            $indexContainer = 'authentication-index';
        }

        // redirect($redirectUrl)->with($response);
        return view($indexContainer, $response);
    }

    public function signIn()
    {
        $result = [];

        $response = [
            'content' => 'authentication/sign-in',
            'data' => $result,
        ];

        return view('authentication-index', $response);
    }

    public function login(Request $request)
    {
        $statusCode = 400;
        $response = [
            'content' => 'authentication/sign-up',
            'messages' => [],
            'data' => [],
        ];
        $indexContainer = 'index';

        $token = csrf_token();
        $loginHttpClient = Request::create('/api/login', 'POST', $request->all());
        $loginApiResponse = Route::dispatch($loginHttpClient);

        $statusCode = $loginApiResponse->getStatusCode();

        $response['messages'] = collect($loginApiResponse->getData()->message)->map(function ($message) use ($statusCode) {
            return [
                'type' => ($statusCode == 200) ? 'success' : 'danger',
                'message' => $message,
            ];
        });

        if ($statusCode != 200) {
            $indexContainer = 'authentication-index';
        }

        return view($indexContainer, $response);
    }

    public function forgotPassword()
    {
        $response['content'] = 'authentication/forgot-password';

        return view('authentication-index', $response);
    }

    public function requestResetPassword(Request $request)
    {
        $statusCode = 400;
        $response = [
            'content' => 'home',
            'messages' => [],
        ];
        $indexContainer = 'index';

        $registerHttpClient = Request::create('/api/register', 'POST', $request->all());
        $registerApiResponse = Route::dispatch($registerHttpClient);

        $statusCode = $registerApiResponse->getStatusCode();

        $response['messages'] = collect($registerApiResponse->getData()->message)->map(function ($message) use ($statusCode) {
            return [
                'type' => ($statusCode == 200) ? 'success' : 'danger',
                'message' => $message,
            ];
        });

        if ($statusCode != 200) {
            $indexContainer = 'authentication-index';
        }

        return view($indexContainer, $response);
    }

}