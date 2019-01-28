<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $meta = array(
            'title' => 'BoardGameBureau',
            'description' => '',
            'section' => 'Home',
            'subSection' => 'Home'
        );

        return view('pages/home', compact('meta'));
    }

    public function about(){
        $meta = array(
            'title' => 'BoardGameBureau',
            'description' => '',
            'section' => 'About',
            'subSection' => 'About'
        );

        return view('pages/about', compact('meta'));
    }

    public function contact(){
        $meta = array(
            'title' => 'BoardGameBureau',
            'description' => '',
            'section' => 'Contact',
            'subSection' => 'Contact'
        );

        return view('pages/contact', compact('meta'));
    }

    public function privacy(){
        $meta = array(
            'title' => 'BoardGameBureau',
            'description' => '',
            'section' => 'Privacy',
            'subSection' => 'Privacy'
        );

        return view('pages/privacy', compact('meta'));
    }
}
