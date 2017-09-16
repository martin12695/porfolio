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
        $profile = DB::table('intro')->select('profile')->first();
        return view('profile',['profile'=>$profile]);
    }

    public function sketch(){
        $info =  DB::table('sketch')->orderby('id','des')->get();
        return view('sketch_home',
            ['info' =>  $info ]);
    }

    public function index()
    {
        $info =  DB::table('overview')->orderby('id','des') ->limit(8)->get();
        return view('index',
            ['info' =>  $info, 'filter' => 2 ]);
    }

    public function filter($type)
    {
        if ($type != 2) {
            $info = DB::table('overview')->where('status', $type)->orderby('id', 'des')->get();
        } else {
            $info = DB::table('overview')->orderby('id', 'des')->get();
        }
        return view('index',
            ['info' =>  $info, 'filter' => $type ]);


    }

    public function getDetail($slug)
    {
        $info =  DB::table('overview')->where('slug',$slug)->first();
        $next = DB::select('select slug from overview where id = (select min(id) from overview where id > ?)',[$info->id]);
        if (!empty($next) ) {
            $next = $next[0];
        } else {
            $next = (object)[];
            $next->slug = $slug;
        }
        $previous = DB::select('select slug from overview where id = (select max(id) from overview where id < ?)',[$info->id]);
        if (!empty($previous) ) {
            $previous = $previous[0];
        } else {
            $previous = (object)[];
            $previous->slug = $slug;
        }

        $random = DB::table('overview')->where('id','!=',$info->id)->inRandomOrder()->limit(6)->get();
        return view('project_detail',
            [   'info' => $info,
                'slug_next'  => $next->slug,
                'slug_previous' => $previous->slug,
                'random'        => $random
            ]);
    }

    /**
     * @return string
     */
    public function getMoreProject($page)
    {
        $skip = $page*8;
        $info = DB::table('overview')->skip($skip)->take(8)->orderby('id', 'des')->get();
        return \Response::json($info);
    }

}
