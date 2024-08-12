<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;
use PDF;
use Illuminate\Support\Facades\File;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::orderBy('created_at', 'DESC')->get();
        return view('admin.stores.list', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'type' => 'required|string',
            'description' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.stores.create')->withErrors($validator)->withInput();
        }

        $store = new Store();
        $store->name = $request->name;
        $store->address = $request->address;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->type = $request->type;
        $store->description = $request->description;
        $store->save();

        return redirect()->route('admin.stores.index')->with('success', 'Store created successfully');
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
        $store = Store::find($id);
        return view('admin.stores.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $store = Store::find($id);

        $rules = [
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'type' => 'required|string',
            'description' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('admin.stores.edit', $store->id)->withErrors($validator)->withInput();
        }

        $store->name = $request->name;
        $store->address = $request->address;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->type = $request->type;
        $store->description = $request->description;
        $store->save();

        return redirect()->route('admin.stores.index')->with('success', 'Store updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->route('admin.stores.index')->with('success', 'Store deleted successfully');
    }

    public function pdf_generator_get(Request $request){
        $stores = Store::get();
        $data = [
            'title' => 'Este es el resumen de los proovedores',
            'stores' => $stores
        ];
        $pdf = PDF::loadView('admin.stores.myPDF', $data);
        return $pdf->download('errorsolutioncode.pdf');
    }
}
