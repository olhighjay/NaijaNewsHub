<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    #show homepage
    public function index(){
        return view('pages.home');
    }

    #show services page
    public function services(){
        $data= [
            'title'=>'Services',
            'services'=>['Web Design', 'Programming', 'SEO', 'Digital Marketing'],
        ];
        return view('pages.services')->with($data);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }


}
