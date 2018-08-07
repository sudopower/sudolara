<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       $title = 'Welcome to my blog !';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "About US !";
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services !',
            'services' => ['Web','App','Game']
        );
        return view('pages.services')->with($data);
    }
}