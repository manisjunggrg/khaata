<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Due;
use App\Models\Product;
use Illuminate\Http\Request;

class DueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dues=Due::latest()->paginate(5);

        return view('due.index',compact('dues'))->with('i',(\request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::select('product_name','id','price')->get();

        $customers=Customer::select('name','id')->get();

        return view('due.create',compact('products', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Due::create($input);
        return redirect()->route('dues.index')->with('success','Due added sucessfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function show(Due $due)
    {
        $products=Product::select('product_name','id','price')->get();

        $customers=Customer::select('name','id')->get();

        return view('due.show',compact('due','products','customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function edit(Due $due)
    {
        $products=Product::select('product_name','id','price')->get();

        $customers=Customer::select('name','id')->get();
        return view('due.edit',compact('due','products','customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Due $due)
    {

        $input=$request->all();
        $due->update($input);
        return redirect()->route('dues.index')->with('success','Due added sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function destroy(Due $due)
    {
        $due->delete();
        return redirect()->route('dues.index');
    }
}
