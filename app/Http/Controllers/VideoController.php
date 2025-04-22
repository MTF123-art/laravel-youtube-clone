<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index () {
        return view('auth.user.my-video');
    }
    public function addVideo () {
        return view('auth.user.add-video');
    }
    public function storeVideo(){
        dd('store video');
    }
}
