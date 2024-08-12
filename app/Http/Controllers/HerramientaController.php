<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use PDF;
use App\Models\Herramienta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

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
        if($request->image != ""){
            $rules['image'] = 'image';
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

        if($request->image != ""){
            $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;

        $image->move(public_path('uploads/herramientas'), $imageName);

        $herramienta->image = $imageName;
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
        if($request->image != ""){
            $rules['image'] = 'image';
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

        if($request->image != ""){

            File::delete(public_path('uploads/herramienta/'.$herramienta->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/herramienta'), $imageName);

            $herramienta->image = $imageName;
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

        File::delete(public_path('uploads/herramienta/'.$herramienta->image));
        $herramienta->delete();
        return redirect()->route('Herramientas.index')->with('success', 'Product deleted successfully');
    }

    public function pdf_generator_get(Request $request){
        $herramientas = Herramienta::get();
        $data = [
            'title' => 'Este es el resumen de las herramientas',
            'date' => date('Y-m-d'),
            'herramientas' => $herramientas
        ];
        $pdf = PDF::loadView('admin.Herramientas.myPDF', $data);
        return $pdf->download('errorsolutioncode.pdf');
    }
}
