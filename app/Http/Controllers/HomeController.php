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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function sketch(){
        $info =  DB::table('sketch')->orderby('id','des')->get();
        return view('sketch_home',
            ['info' =>  $info ]);
    }

    public function index()
    {
        $info =  DB::table('overview')->orderby('id','des')->get();
        return view('index',
            ['info' =>  $info ]);
    }

    public function getDetail($slug)
    {
        $info =  DB::table('overview')->where('slug',$slug)->first();
        return view('project_detail',
            ['info' =>  $info ]);
    }

}
