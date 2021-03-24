<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageModel;
use Image;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function upload(){
        $images = ImageModel::all();
        return view('uploadimage',compact('images'));
    }

    public function uploadImage(Request $req){
        $this->validate($req, [
                'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
        $filename=array();
        if($files=$req->file('filename')){
            foreach($files as $file){
                $title = $req->title;
                $slug = Str::of($title)->slug('-');
                $alttext = $req->alttext;
        
                $originalImage= $req->file('filename');
                $thumbnailImage = Image::make($originalImage);
        
                $thumbnailPath = public_path().'/thumbnail/';
                $originalPath = public_path().'/images/';
        
                $temp = $originalImage->getClientOriginalName();
                $temp_ext = explode(".",$temp);
                $ext = end($temp_ext); 
        
                $filename = time().".".$ext;
                
        
                $thumbnailImage->save($originalPath.$filename);
                $thumbnailImage->resize(150,150);
                $thumbnailImage->save($thumbnailPath.$filename); 
        
                $imagemodel= new ImageModel();
                $imagemodel->title=$title;
                $imagemodel->slug=$slug;
                $imagemodel->alttext=$alttext;
                $imagemodel->filename=$filename;
                if($imagemodel->save()){
                    return redirect()->back()->with('msg','Succesfully Uploaded'); 
                }
            }
        }
        
    }
}
