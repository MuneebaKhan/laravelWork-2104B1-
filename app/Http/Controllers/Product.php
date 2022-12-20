<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Prod = ProductModel::all();

        $data = compact('Prod');
        return view('Product.showProd')->with($data);
        // echo '<pre>';
        // print_r($Produts->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.addProd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'price' => 'required',
            'desc' => 'required',
        ]);

        $Prod = new ProductModel();

        $Prod->Pname = $request['name'];
        $Prod->Price = $request['price'];
        $Prod->Email = $request['email'];
        $Prod->Description = $request['desc'];
        $Prod->save();
        return redirect()->route('products.index')->with('status','You have successfully created!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Prods = ProductModel::find($id);
        $data = compact('Prods');
        return view('Product.DetailProd')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Prods = ProductModel::find($id);
         $data = compact('Prods');
        return view('Product.Edit')->with($data);

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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'price' => 'required',
            'desc' => 'required',
        ]);

        $Prod = ProductModel::find($id);

        $Prod->Pname = $request['name'];
        $Prod->Price = $request['price'];
        $Prod->Email = $request['email'];
        $Prod->Description = $request['desc'];
        $Prod->save();
        return redirect()->route('products.index')->with('status','Product Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //2
    {
        $Prod = ProductModel::find($id);//2
        $Prod->delete();
        return redirect()->route('products.index')->with('delete','Product Deleted');

    }
}
