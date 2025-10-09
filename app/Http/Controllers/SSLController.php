<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class SSLController extends Controller
{
    public function ssl()
    {
        $data = DB::table('plans')
            ->where('slug', 'ssl')
            ->get();
        return view('user.ssl', compact('data'));
    }
}
