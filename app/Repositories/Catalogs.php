<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Catalog;

class Catalogs
{
    public static function store($request, $userID)
    {
        $id = DB::select('SELECT UUID_SHORT() AS UUID')[0]->UUID;
        $catalog = new Catalog;
        $catalog->id = $id;
        $catalog->slug = Str::random(8);
        $catalog->name = 'My Catalog';
        $catalog->description = 'This is my catalog';
        $catalog->user_id = $userID;
        $catalog->save();
        return $id;
    }
}