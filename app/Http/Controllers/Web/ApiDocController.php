<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiDocController extends Controller
{
    public function view($version = null)
    {
        $version = $version ?? config('api.main-version');
        
        return view('docs.api', compact('version'));
    }
}
