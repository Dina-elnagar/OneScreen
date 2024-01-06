<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        $images = Image::all();
        return view('Home', compact('suppliers','products','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = new Supplier();
        $sub->name_sub=$request->input('name_sub');
        $sub->code_sub=$request->input('code_sub');
        $sub->save();

        $supplier_id=Supplier::latest()->first()->id;

        $product= new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->active=$request->has('active') ? false : true;
        $product->type=$request->has('type') ? true : false;
        $product->color=$request->has('color') ? true : false;
        $product->code=$request->input('code');
        $product->supplier_id=$supplier_id;
        $product->save();

        if ($request->hasFile('pic')){
            $product_id=Product::latest()->first()->id;
            $image=$request->file('pic');
            $file_name=$image->getClientOriginalName();
            $image_save=Image::create([
                'product_id'=>$product_id,
                'file_name'=> $file_name,
            ]);
            //move pic
            $imageName= $request->pic->getClientOriginalName();
            $request->pic->move(public_path('Attachment/'),$imageName);
        }

        return redirect()->route('index')->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return redirect()->route('index')->with('success','Product deleted successfully.');
    }
}
