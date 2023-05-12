<?php

namespace App\Http\Controllers\api\defaults;

use App\Http\Controllers\Controller;
use App\Models\Book\Provinces;
use Illuminate\Http\Request;

class provinces_without_gender extends Controller
{
    public function provinces() {
        $provinces = Provinces::select('ostan')
            ->distinct()
            ->orderBy('ostan', 'asc')
            ->get();
        return response()->json($provinces);
    }
}
