<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eixo;

class EixoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = Eixo::all();
        return view('eixo.index', compact('data'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eixo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo($request->name);
        $eixo = new Eixo();
        $eixo->name = $request->name;
        $eixo->description = $request->description;
        $eixo->save();
        return redirect()->route('eixo.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            return view('eixo.show', compact('eixo'));
        }
        return '<h1>EIXO NAO ENCONTRADO</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eixo = Eixo::find($id);

        if (isset($eixo)) {
            return view('eixo.edit', compact(['eixo']));
        }
        return "<H1>DEU MERDA PILANTRAKKKKKKKKKKKKKKKKKKKK!</H1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eixo = Eixo::find($id);
        if(isset($eixo)){
            $eixo->name = $request->name;
            $eixo->description = $request->description;
            $eixo->save();
            return redirect()->route(('eixo.index'));
        }
        return '<h1>EIXO NAO ENCONTRADO</h1>';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eixo = Eixo::find($id);
        if (isset($eixo)) {
            $eixo->delete();
            return redirect()->route('eixo.index'); # code...
        }
        return '<h1>EIXO NAO ENCONTRADO</h1>';
    }

}
