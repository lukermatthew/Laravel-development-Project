<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productsupplier;

class ProductsuppliersController extends Controller
{
    /**
     *  Only authenticated users can access this controller
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productsuppliers = Productsupplier::Paginate();
        return view('inv_mg.productsuppliers.index')->with('productsuppliers',$productsuppliers);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inv_mg.productsuppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'supplier_name' => 'required|min:2',
            'supplier_details' => 'required|min:3',
            'supplier_address' => 'required|min:3',
            'phone' => 'required|min:3'
        ]);

        
        $productsupplier = new Productsupplier();
        $productsupplier->supplier_name = $request->input('supplier_name');
        $productsupplier->supplier_details = $request->input('supplier_details');
        $productsupplier->supplier_address = $request->input('supplier_address');
        $productsupplier->phone = $request->input('phone');
        $productsupplier->save();
        return redirect('/productsuppliers')->with('info',' Supplier has been added!');
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
        $productsupplier = Productsupplier::find($id);
        return view('inv_mg.productsuppliers.edit')->with('productsupplier',$productsupplier);
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
        $this->validate($request,[
            'supplier_name' => 'required|min:2',
            'supplier_details' => 'required|min:3',
            'supplier_address' => 'required|min:3',
            'phone' => 'required|min:3'
        ]);


        $productsupplier = Productsupplier::find($id);
       
        $productsupplier->supplier_name = $request->input('supplier_name');
        $productsupplier->supplier_details = $request->input('supplier_details');
        $productsupplier->supplier_address = $request->input('supplier_address');
        $productsupplier->phone = $request->input('phone');
        $productsupplier->save();
        return redirect('/productsuppliers')->with('info',' Supplier has been added!');
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
        $productsupplier = Productsupplier::find($id);
        $productsupplier->delete();
        return redirect('/productsuppliers')->with('info','Selected Supplier has been deleted!');
    }
}
