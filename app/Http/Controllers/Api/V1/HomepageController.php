<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function mock($param1 = null, $param2 = null)
    {
        return empty_response();
    }
}
