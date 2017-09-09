<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 9/9/2017
 * Time: 11:45 AM
 */

namespace App\Http\Controllers;
use DB;
use Symfony\Component\HttpFoundation\Request;
use Carbon;
use Illuminate\Support\Facades\Validator;
use File;


class ImageController  extends Controller
{
    public function uploadImage (Request $request){
        if($files=$request->file('images')){
            foreach($files as $file){
                $validator = Validator::make(
                    array('file' => $file),
                    array('file' => 'required|mimes:jpeg,png|image|max:2000')
                );
                if ($validator->passes()) {
                    $name=time().$file->getClientOriginalName();
                    $file->move('images/Upload',$name);
                    DB::table('image')->insert([
                        'name'    => $name
                    ]);
                }

            }
            return back()->with('response', 1);
        }
    }
}