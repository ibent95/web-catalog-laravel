<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class Users
{
    public static function store($request)
    {
        $id = DB::select('SELECT UUID_SHORT() AS UUID')[0]->UUID;
        $user = new User;
        $user->id = $id;
        $user->username = Str::random(6);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if(filled($request->username)) $user->username = $request->username;
        $user->save();

        return $id;
    }
}