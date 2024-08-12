<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $herramientas = Herramienta::orderBy('created_at', 'DESC')->get();
        return view('admin.Herramientas.list', ['herramientas' => $herramientas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Herramientas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'elemento' => 'required|string',
            'cantidad' => 'required|integer',
            'costo'=> 'required|numeric',
            'vidaUtil' => 'required|string',
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'caracteristicas' => 'required|string'
        ];
        if($request->fotoHerramienta != ""){
            $rules['fotoHerramienta'] = 'fotoHerramienta';
        }
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('admin.Herramientas.create')->withErrors($validator)->withInput();
        }

        $herramienta = new Herramienta();
        $herramienta->elemento = $request->elemento;
        $herramienta->cantidad = $request->cantidad;
        $herramienta->costo = $request->costo;
        $herramienta->vidaUtil = $request->vidaUtil;
        $herramienta->marca = $request->marca;
        $herramienta->modelo = $request->modelo;
        $herramienta->caracteristicas = $request->caracteristicas;
        $herramienta->save();

        if($request->fotoHerramienta != ""){
            $fotoHerramienta = $request->fotoHerramienta;
        $ext = $fotoHerramienta->getClientOriginalExtension();
        $imageName = time().'.'.$ext;

        $fotoHerramienta->move(public_path('uploads/herramientas'), $fotoHerramienta);

        $herramienta->fotoHerramienta = $imageName;
        $herramienta->save();
        }

        return redirect()->route('admin.Herramientas.create')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $herramienta = Herramienta::findOrFail($id);
        return view('admin.Herramientas.edit', ['herramienta' => $herramienta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $herramienta = Herramienta::findOrFail($id);

        $rules = [
            'elemento' => 'required|string',
            'cantidad' => 'required|integer',
            'costo'=> 'required|numeric',
            'vidaUtil' => 'required|string',
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'caracteristicas' => 'required|string'
        ];
        if($request->fotoHerramienta != ""){
            $rules['fotoHerramienta'] = 'fotoHerramienta';
        }

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('admin.Herramientas.edit', $herramienta->id)->withErrors($validator)->withInput();
        }
        
        $herramienta->elemento = $request->elemento;
        $herramienta->cantidad = $request->cantidad;
        $herramienta->costo = $request->costo;
        $herramienta->vidaUtil = $request->vidaUtil;
        $herramienta->marca = $request->marca;
        $herramienta->modelo = $request->modelo;
        $herramienta->caracteristicas = $request->caracteristicas;
        $herramienta->save();

        if($request->fotoHerramienta != ""){

            File::delete(public_path('uploads/herramienta/'.$herramienta->fotoHerramienta));

            $fotoHerramienta = $request->fotoHerramienta;
            $ext = $fotoHerramienta->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $fotoHerramienta->move(public_path('uploads/herramienta'), $imageName);

            $herramienta->fotoHerramienta = $imageName;
            $herramienta->save();
        }

        return redirect()->route('admin.Herramientas.edit', $herramienta->id)->with('success', 'Product updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $herramienta = Herramienta::findOrFail($id);
        File::delete(public_path('uploads/herramienta/'.$herramienta->fotoHerramienta));
        $herramienta->delete();
        return redirect()->route('Herramientas.index')->with('success', 'Product deleted successfully');
    }
}
