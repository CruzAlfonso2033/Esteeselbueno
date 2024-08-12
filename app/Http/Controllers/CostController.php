<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use PDF;


class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $costs = Cost::orderBy('created_at', 'DESC')->get();
        return view('admin.costs.list', ['costs' => $costs]);
        // $products = Product::orderBy('created_at', 'DESC')->get();
        // return view('admin.Servicios.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.costs.create');
        // return view('admin.Servicios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'element' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
        ];
        if($request->image != ""){
            $rules['image'] = 'image';
        }
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('admin.costs.create')->withErrors($validator)->withInput();
        }

        $cost = new Cost();
        $cost->element = $request->element;
        $cost->date = $request->date;
        $cost->price = $request->price;
        $cost->save();

        if($request->image != ""){
            $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;

        $image->move(public_path('uploads/costs'), $imageName);

        $cost->image = $imageName;
        $cost->save();
        }

        return redirect()->route('admin.costs.create')->with('success', 'Product created successfully');
        

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
        $cost = Cost::findOrFail($id);
        return view('admin.costs.edit', ['cost' => $cost]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cost = Cost::findOrFail($id);

        $rules = [
            'element' => 'required|string',
            'date' => 'required|date',
            'price' => 'required|numeric',
        ];
        if($request->image != ""){
            $rules['image'] = 'image';
        }

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('admin.costs.edit', $cost->id)->withErrors($validator)->withInput();
        }
        
        $cost->element = $request->element;
        $cost->date = $request->date;
        $cost->price = $request->price;
        $cost->save();

        if($request->image != ""){

            File::delete(public_path('uploads/costs/'.$cost->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/costs'), $imageName);

            $cost->image = $imageName;
            $cost->save();
        }

        return redirect()->route('admin.costs.edit', $cost->id)->with('success', 'Product updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cost = Cost::findOrFail($id);
        File::delete(public_path('uploads/costs/'.$cost->image));
        $cost->delete();
        return redirect()->route('admin.costs.index')->with('success', 'Product deleted successfully');

    }

    public function pdf_generator_get(Request $request){
        $costs = Cost::get();
        $data = [
            'title' => 'Este es el resumen de gastos',
            'date' => date('Y-m-d'),
            'costs' => $costs
        ];
        $pdf = PDF::loadView('admin.costs.myPDF', $data);
        return $pdf->download('errorsolutioncode.pdf');
    }
}
