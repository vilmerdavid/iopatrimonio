<?php

namespace App\Http\Controllers;

use App\Models\Iglesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Iglesias extends Controller
{
    public function crear($tipo)
    {
        $data = array('tipo' => $tipo );
        return view('iglesias.crear',$data);
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'titulo'=>'required|unique:iglesias',
            
        ]);
        $i=new Iglesia();
        $i->foto_principal='';
        $i->titulo=$request->titulo;
        $i->detalle=$request->detalle;
        $i->foto_secundario='';
        $i->foto_fondo='';
        $i->slug=Str::slug(Str::slug($request->titulo, '-'));
        $i->tipo=$request->tipo;
        $i->save();

        if ($request->hasFile('foto_principal')) {
            
                $extension = $request->foto_principal->extension();
                Storage::delete($i->foto_principal);
                $path = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_principal'), $i->slug.'_f_p_'.$i->id.'.'.$extension
                );
                $i->foto_principal=$path;
                $i->save();
            
        }

        if ($request->hasFile('foto_secundario')) {
            
                $extension = $request->foto_secundario->extension();
                Storage::delete($i->foto_secundario);
                $path_s = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_secundario'), $i->slug.'_f_s_'.$i->id.'.'.$extension
                );
                $i->foto_secundario=$path_s;
                $i->save();
            
        }

        if ($request->hasFile('foto_fondo')) {
            
            $extension = $request->foto_fondo->extension();
            Storage::delete($i->foto_fondo);
            $path_s = Storage::putFileAs(
                'public/iglesias', $request->file('foto_fondo'), $i->slug.'_f_f_'.$i->id.'.'.$extension
            );
            $i->foto_fondo=$path_s;
            $i->save();
        
        }

        

        return redirect()->route('pagina',$request->tipo);

    }

    public function editar($id)
    {
        $i=Iglesia::find($id);
        $data = array('iglesia' => $i );
        return view('iglesias.editar',$data);
    }

    public function actualizar(Request $request)
    {
        $request->validate([
            'titulo'=>'required|unique:iglesias,id,'.$request->id,
            
        ]);
        $i= Iglesia::find($request->id);
        
        $i->titulo=$request->titulo;
        $i->detalle=$request->detalle;
        $i->slug=Str::slug(Str::slug($request->titulo, '-'));
        
        $i->save();

        if ($request->hasFile('foto_principal')) {
            
                $extension = $request->foto_principal->extension();
                Storage::delete($i->foto_principal);
                $path = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_principal'), $i->slug.'_f_p_'.$i->id.'.'.$extension
                );
                $i->foto_principal=$path;
                $i->save();
            
        }

        if ($request->hasFile('foto_secundario')) {
            
                $extension = $request->foto_secundario->extension();
                Storage::delete($i->foto_secundario);
                $path_s = Storage::putFileAs(
                    'public/iglesias', $request->file('foto_secundario'), $i->slug.'_f_s_'.$i->id.'.'.$extension
                );
                $i->foto_secundario=$path_s;
                $i->save();
            
        }

        if ($request->hasFile('foto_fondo')) {
            
            $extension = $request->foto_fondo->extension();
            Storage::delete($i->foto_fondo);
            $path_s = Storage::putFileAs(
                'public/iglesias', $request->file('foto_fondo'), $i->slug.'_f_f_'.$i->id.'.'.$extension
            );
            $i->foto_fondo=$path_s;
            $i->save();
        
        }

        return redirect()->route('pagina',$i->tipo);
    }
}
