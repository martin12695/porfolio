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
use Illuminate\Support\Facades\Validator;
use File;

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
        $info = DB::table('overview')->select('id','title','short_des','link_image')->orderBy('id', 'desc')->paginate(5);
        return view ('project', [
            'info' => $info,
            'page' => 'project'
        ]);
    }

    public function addProject() {
        return view ('add');
    }

    public function getSketch(){
        $info = DB::table('sketch')->select('id','title','short_des','image')->orderBy('id', 'desc')->paginate(5);
        return view ('sketch', [
            'info' => $info,
            'page' => 'project'
        ]);
    }

    public function addSketch() {
        return view ('add_sketch');
    }

    public function saveProject(Request $request) {
    $nameImage = 'noimage.jpg';
    $data = $request->input();
    if ( $request->hasFile('image') ){
        $image = $request->file('image');
        $validator = Validator::make(
            array('file' => $image),
            array('file' => 'required|mimes:jpeg,png|image|max:2048')
        );
        if ($validator->passes()) {
            $nameImage = time() . $image->getClientOriginalName();
            $image->move('images/thum/', $nameImage);
        }else {
            return back()->with('response', 2);
        }
    }
    $slug = $data['title'];
    $slug = parent::convert_vi_to_en($slug);
    $count = DB::table('overview')
        ->where('slug', 'like', '%'.$slug.'%')
        ->count();
    if($count > 0) {
        $slug . '-' . $count ;
    }
    $mytime = Carbon\Carbon::now();
    DB::table('overview')->insert(
        [   'title' => $data['title'],
            'content' => $data['content'],
            'short_des' => $data['short_des'],
            'created'   => $mytime->toDateTimeString(),
            'link_image' => $nameImage,
            'slug'  => $slug,
            'square' => $data['square'],
            'owner'  => $data['owner'],
            'year'   => $data['year'],
            'status' => $data['status'],
            'address'=> $data['address']
        ]
    );
    return back()->with('response', 1);

}

    public function saveSketch(Request $request) {
        $nameImage = 'noimage.jpg';
        $data = $request->input();
        if ( $request->hasFile('image') ){
            $image = $request->file('image');
            $validator = Validator::make(
                array('file' => $image),
                array('file' => 'required|mimes:jpeg,png|image|max:2048')
            );
            if ($validator->passes()) {
                $nameImage = time() . $image->getClientOriginalName();
                $image->move('images/thum/', $nameImage);
            }else {
                return back()->with('response', 2);
            }
        }
        $slug = $data['title'];
        $slug = parent::convert_vi_to_en($slug);
        $count = DB::table('sketch')
            ->where('slug', 'like', '%'.$slug.'%')
            ->count();
        if($count > 0) {
            $slug . '-' . $count ;
        }
        $mytime = Carbon\Carbon::now();
        DB::table('sketch')->insert(
            [   'title' => $data['title'],
                'content' => $data['content'],
                'short_des' => $data['short_des'],
                'created'   => $mytime->toDateTimeString(),
                'image' => $nameImage,
                'slug'  => $slug
            ]
        );
        return back()->with('response', 1);

    }

    public function saveIdProject(Request $request, $id) {
        $data = $request->input();
        if ( $request->hasFile('image') ){
            $image = $request->file('image');
            $validator = Validator::make(
                array('file' => $image),
                array('file' => 'required|mimes:jpeg,png|image|max:2048')
            );
            if ($validator->passes()) {
                $oldImage =  DB::table('overview')->where('id', $id)->select('link_image')->first();
                $oldImage = $oldImage->link_image;
                if ($oldImage != 'noimage.jpg') {
                    File::delete('images/thum/' . $oldImage);
                }
                $nameImage = time() . $image->getClientOriginalName();
                $image->move('images/thum/', $nameImage);
                DB::table('overview')
                    ->where('id', $id)
                    ->update(['link_image' => $nameImage]
                    );

            }else {
                return back()->with('response', 2);
            }
        }
        DB::table('overview')
            ->where('id', $id)
            ->update(
            [   'title' => $data['title'],
                'content' => $data['content'],
                'short_des' => $data['short_des'],
                'square' => $data['square'],
                'owner'  => $data['owner'],
                'year'   => $data['year'],
                'status' => $data['status'],
                'address'=> $data['address']
            ]
        );
        return back()->with('response', 1);

    }

    public function editProject($id) {
        $info = DB::table('overview')->where('id',$id)->first();
        return view ('edit',['info' => $info]);
    }

    public function deleteProject ($id) {
        DB::table('overview')->where('id',$id)->delete();
        return back();
    }

    public function uploadImg(){
        $info = DB::table('image')->paginate(10);
        return view('upload_img', [
            'images' => $info
        ]);
    }

    public function changePass(){
        return view('change_pass');
    }

    public function editProfile(){
        return view('profile_setting');
    }
}