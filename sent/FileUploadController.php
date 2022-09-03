<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Image;
    

use Illuminate\Support\Facades\Storage;
class FileUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        

if($request->hasfile('file'))
{
    ///$file = $request->file('file');
   /// $name=time().$file->getClientOriginalName();
   // $filePath = 'images/' . $name;
    //$storage = Storage::disk('s3')->put($filePath, file_get_contents($file));
   // $storage = Storage::disk('s3')->put($filePath, $request->file('file'));
   //dd($storage);

   $file = $request->file('file');
$name=time().$file->getClientOriginalName();
$filePath = 'images/' . $name;
$storage = Storage::disk('s3')->put($filePath, file_get_contents($file));
dd($storage);
    //echo "file upload";
    //return back()->with('success','Image Uploaded successfully');
}
/*$path = $request->file('image')->store('images', 's3');
$image = Image::create([
    'filename' => basename($path),
    'url' => Storage::disk('s3')->url($path)
]);dd($image);*/
//return Storage::disk('s3')->response('images/' . $image->filename);


    }
}