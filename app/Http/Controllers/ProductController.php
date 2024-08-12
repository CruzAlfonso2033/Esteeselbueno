<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('Vistas.Informes', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string',
            'direction' => 'required|string',
            'phone' => 'required|string',
            'status' => 'required|string',
            'person' => 'required|string',
            'price' => 'required|numeric',
        ];

if($request->image != ""){
    $rules['image'] = 'image';
}

        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->route('admin.Servicios.create')->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->date = $request->date;
        $product->category = $request->category;
        $product->direction = $request->direction;
        $product->phone = $request->phone;
        $product->status = $request->status;
        $product->person = $request->person;
        $product->price = $request->price;
        $product->save();

        if($request->image != ""){
            $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;

        $image->move(public_path('uploads/products'), $imageName);

        $product->image = $imageName;
        $product->save();
        }

        

        return redirect()->route('admin.Servicios.create')->with('success', 'Product created successfully');
        /* return redirect()->route('admin.Servicios.create')->with('success', 'Product created successfully'); */
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
        $product = Product::findOrFail($id);
        return view('admin.Servicios.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string',
            'direction' => 'required|string',
            'phone' => 'required|string',
            'status' => 'required|string',
            'person' => 'required|string',
            'price' => 'required|numeric',
        ];
        if($request->image != ""){
            $rules['image'] = 'image';
        }

        $validator=Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('admin.Servicios.edit', $product->id)->withErrors($validator)->withInput();
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->date = $request->date;
        $product->category = $request->category;
        $product->direction = $request->direction;
        $product->phone = $request->phone;
        $product->status = $request->status;
        $product->person = $request->person;
        $product->price = $request->price;
        $product->save();

        if($request->image !== ""){

            File::delete(public_path('uploads/products/'.$product->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/products'), $imageName);

            $product->image = $imageName;
            $product->save();
    }
    
            return redirect()->route('admin.Servicios.create')->with('success', 'Product updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     */

 
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        File::delete(public_path('uploads/products/'.$product->image));
        $product->delete();
        return redirect()->route('admin.Servicios.create')->with('success', 'Product deleted successfully');
    }
}
