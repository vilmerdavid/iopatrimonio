<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class Videos extends Controller
{
    public function index($tipo)
    {
        $videos=Video::where('tipo',$tipo)->get();
        $video_ultimo=Video::where('tipo',$tipo)->latest()->first();
        $data = array('videos' => $videos,'ultimoVideo'=>$video_ultimo );

        return view('videos.index',$data);
    }

    public function guardar(Request $request)
    {
        $v=new Video();
        $v->url=$request->url;
        $v->titulo=$request->titulo;
        $v->tipo=$request->tipo;
        $v->save();
        return redirect()->route('administracion');
    }
}
