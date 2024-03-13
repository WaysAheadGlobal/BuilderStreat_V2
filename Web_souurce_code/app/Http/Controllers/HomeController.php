<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('home',['data' => $data]);
    }

    public function whatwedo()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('what-we-do',['data' => $data]);
    }

    public function ourcategories()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('our-categories',['data' => $data]);
    }
    public function blog()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('blog',['data' => $data]);
    }
    public function teams()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('teams',['data' => $data]);
    }
    public function faq()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('faq',['data' => $data]);
    }

    public function testimonials()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimenow = date('Y-m-d H:i:s');
        $data = [];
        // $data = DB::table('number')->where('show', '>=', $datetimenow )->orderBy('id','DESC')->take(1)->get();
        return view('testimonials',['data' => $data]);
    }

}
