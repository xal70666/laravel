<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function uploadfile(){
      return view('uploadfile');
    }

    public function uploadfilepost(Request $request){
      $this->validate($request, [
        'fileToUpload' => 'required|file|max:1028',
      ]);

      $fileName = "upload-" .time(). "." .request()->fileToUpload->getClientOriginalExtension();

      $request->fileToUpload->storeAs('logos', $fileName);

      return back()->with('success', 'file berhasil diupload!');
    }
}
