<?php

namespace App\Http\Traits;

trait Response
{
    public function badRequest($message)
    {
        return response()->json([
            'message' => $message
        ], 400);
    }

    public function internalServerError()
    {
        return response()->json([
            'message' => 'layanan sedang bermasalah'
        ], 500);
    }
}
