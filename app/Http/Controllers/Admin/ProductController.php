<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all()->toArray();
        return view('admin.product.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'pname'=>'required',
            'slug'=>'required',
            'image'=>'required',
            'pfeature'=>'required',
        ]);
        $product=new product();

        $product->product_name = $request->pname;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            $destinationPath = public_path('/uploads/products');
            $image->move($destinationPath, $image_name);
            $product->image = $image_name;
        }

        $product->slug = $request->slug;
        $product->is_featured = $request->pfeature;
        $product->description = $request->pdescripion;
        $product->save();
        return view('admin.product.product', compact('product'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
