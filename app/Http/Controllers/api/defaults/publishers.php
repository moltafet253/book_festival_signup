<?php

namespace App\Http\Controllers\api\defaults;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publishers extends Controller
{
    public function getpublishers() {
        $publishers = DB::table('publishers')
            ->orderBy('title','asc')
            ->get()
            ->where('active', '=', 1)
        ;
        return $publishers;
    }
}
