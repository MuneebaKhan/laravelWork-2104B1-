<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\ProductModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cat = category::join(
            'products',
            'products.id',
            '=',
            '_category.ProdId'
        )->get();

        $data = compact('Cat');
        return view('Product.showCat')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Prod = ProductModel::all();

        $data = compact('Prod');
        return view('Product.Category')->with($data);
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
        ]);

        $Cat = new category();

        $Cat->Cname = $request['name'];
        $Cat->ProdId = $request['Category'];

        $Cat->save();
        return redirect()
            ->route('category.index')
            ->with('status', 'You have successfully inserted!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Cid)
    {
        $Cat = category::join(
            'products',
            'products.id',
            '=',
            '_category.ProdId'
        )->find($Cid); //1
        $data = compact('Cat');
        return view('Product.DetailCat')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Cid)
    {
        $Cat = category::find($Cid); //1
        // $data = compact('Cat');

        $Prod = ProductModel::all();

        $data = compact('Prod', 'Cat');
        return view('Product.CEdit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Cid)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $Cat = category::find($Cid);

        $Cat->Cname = $request['name'];
        $Cat->ProdId = $request['Category'];

        $Cat->save();
        return redirect()
            ->route('category.index')
            ->with('status', 'Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Cid)
    {
        $Prod = category::find($Cid); //2
        $Prod->delete();
        return redirect()
            ->route('category.index')
            ->with('delete', 'Category Deleted');
    }
}
