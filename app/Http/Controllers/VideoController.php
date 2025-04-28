<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
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
    public function storeVideo(VideoRequest $request)
    {
        $request['user_id'] = Auth::id();

        $videoFile = $request->file('video');
        $thumbnailFile = $request->file('thumbnail');

        // membuat name file unik
        $videoFilename = uniqid() . '_' . $videoFile->getClientOriginalName();
        $thumbnailFilename = uniqid() . '_' . $thumbnailFile->getClientOriginalName();

        // simpan file video ke storage private
        $videoPath = $videoFile->storeAs('private/videos', $videoFilename);
        // simpan file thumbnail ke storage public
        $thumbnailPath = $thumbnailFile->storeAs('public/thumbnails', $thumbnailFilename);

        Auth::user()->videos()->create([
            'title' => $request->title,
            'video_path' => $videoPath,
            'thumbnail_path' => $thumbnailPath,
            'description' => $request->description,
        ]);
        return redirect()->route('user.dashboard.my-video')->with('success', 'Video berhasil diunggah');
    }
}
