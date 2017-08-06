<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 8/5/2017
 * Time: 11:12 PM
 */

namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Request;
use Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view ('admin');
    }

    public function getProject() {
        $info = DB::table('overview')->select('id','title','short_des','link_image')->paginate(5);
        return view ('project', [
            'info' => $info,
            'page' => 'project'
        ]);
    }

    public function addProject() {
        return view ('add');
    }

    public function saveProject(Request $request) {
        $data = $request->input();;
        $mytime = Carbon\Carbon::now();
        DB::table('overview')->insert(
            [   'title' => $data['title'],
                'content' => $data['content'],
                'short_des' => $data['short_des'],
                'created'   => $mytime->toDateTimeString()
            ]
        );
       return back()->with('sucess', 'Add Project Sucessfully');

    }

    public function editProject($id) {
        $info = DB::table('overview')->where('id',$id)->first();
        return view ('edit',['info' => $info]);
    }

    public function deleteProject ($id) {
        DB::table('overview')->where('id',$id)->delete();
        return back();
    }
}