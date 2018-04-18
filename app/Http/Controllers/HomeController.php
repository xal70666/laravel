<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function uploadfile(){
      return view("uploadfile");
    }

    public function uploadfilepost(Request $request){
      $this->validate($request, [
        'fileToUpload' => 'required|file|max:1024',
      ]);

      $request->fileToUpload->store('logos');

      return back()
              ->with('success', 'Berhasil upload');
    }
}
