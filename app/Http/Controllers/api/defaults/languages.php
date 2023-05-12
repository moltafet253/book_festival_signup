<?php

namespace App\Http\Controllers\api\defaults;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class languages extends Controller
{
    function getlanguages() {
        $languages = DB::table('languages')->get()->where('active', '=', 1);
        return $languages;
    }
}
