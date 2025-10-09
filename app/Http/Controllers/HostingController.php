<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostingController extends Controller
{
    public function index()
    {
        return view('hosting.index');
    }

    public function shared()
    {
        $data = DB::table('plans')
            ->where('slug', 'shared-hosting')
            ->get();

        $blogs = DB::table('blogs')
          //  ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();

        // dd($data);
        return view('hosting.shared', compact('data', 'blogs'));
    }

    public function wordpress()
    {
        $data = DB::table('plans')
            ->where('slug', 'wordpress-hosting')
            ->get();

        $blogs = DB::table('blogs')
           // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.wordpress', compact('data', 'blogs'));
    }

    public function woocommerce()
    {
        $data = DB::table('plans')
            ->where('slug', 'woocommerce-hosting')
            ->get();

        $blogs = DB::table('blogs')
           // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.woocommerce', compact('data', 'blogs'));
    }

    public function cloud()
    {
        return view('hosting.cloud');
    }

    public function vps()
    {
        $data = DB::table('plans')
            ->where('slug', 'vps-hosting')
            ->get();
        $blogs = DB::table('blogs')
          //  ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.vps', compact('data', 'blogs'));
    }

    public function dedicated()
    {
        $data = DB::table('plans')
            ->where('slug', 'dedicated-server')
            ->get();
        $blogs = DB::table('blogs')
           // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.dedicated', compact('data', 'blogs'));
    }
    
    public function nodejs()
    {
        $data = DB::table('plans')
            ->where('slug', 'nodejs-hosting')
            ->get();
        $blogs = DB::table('blogs')
            // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.nodejs', compact('data', 'blogs'));
    }

    public function reseller()
    {
        $data = DB::table('plans')
            ->where('slug', 'reseller-hosting')
            ->get();
        $blogs = DB::table('blogs')
           // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();
        return view('hosting.reseller', compact('data', 'blogs'));
    }

    public function compare()
    {
        return view('hosting.compare');
    }

    public function checkout($plan)
    {
        if (!in_array($plan, ['starter', 'pro', 'business', 'business-cloud'])) {
            abort(404);
        }

        return view('hosting.checkout', compact('plan'));
    }

    public function process(Request $request)
    {
        // Process the payment and create the hosting account
        // This would integrate with your payment processor

        return redirect()->route('hosting.success');
    }

    public function userHome()
    {
        $data = DB::table('plans')
            ->where(function ($query) {
                $query->where('slug', 'shared-hosting')->where('slug2', 'starter')
                    ->orWhere('slug2', 'micro')
                    ->orWhere('slug2', 'turbo')
                    ->orWhere('slug2', 'boost');
            })
            ->get();

        $blogs = DB::table('blogs')
           // ->where('type', 'blog')
            ->orderBy('id', 'desc') // or 'created_at'
            ->limit(4)
            ->get();

        // dd($blogs);
        return view('user.home', compact('data', 'blogs'));
    }
}