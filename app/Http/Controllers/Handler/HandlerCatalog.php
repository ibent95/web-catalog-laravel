<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HandlerCatalog extends Controller
{
    public function index() 
    {
        // $result = redirect()->route('catalog.index');
        $result = redirect('api/catalog');

        // return to your view
        
        return $result;
    }
}
