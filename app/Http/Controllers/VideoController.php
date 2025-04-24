<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Auth::user()->videos()->latest()->get();
        return view('auth.user.my-video', compact('videos'));
    }
    public function addVideo()
    {
        return view('auth.user.add-video');
    }
    public function storeVideo()
    {
        dd('store video');
    }
}
