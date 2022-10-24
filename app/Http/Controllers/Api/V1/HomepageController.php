<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function mock()
    {
        return empty_response();
    }
    
    public function mockArray()
    {
        return empty_array_response();
    }
}
