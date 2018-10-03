<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productcategory;

class ProductcategoriesController extends Controller
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
        $productcategories = Productcategory::Paginate(5);
        return view('inv_mg.productcategories.index')->with('productcategories',$productcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inv_mg.productcategories.create');
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
            'category_name' => 'required|min:2',
            'category_details' => 'required|min:3'
        ]);

        
        $productcategory = new Productcategory();
        $productcategory->category_name = $request->input('category_name');
        $productcategory->category_details = $request->input('category_details');
        $productcategory->save();
        return redirect('/productcategories')->with('info','Selected Categories has been updated!');
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
        $productcategory = Productcategory::find($id);
        return view('inv_mg.productcategories.edit')->with('productcategory',$productcategory);
        
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
            'category_name' => 'required|min:2',
            'category_details' => 'required|min:3'
        ]);


        $productcategory = Productcategory::find($id);
        $productcategory->category_name = $request->input('category_name');
        $productcategory->category_details = $request->input('category_details');
        $productcategory->save();
        return redirect('/productcategories')->with('info','Selected category has been updated!');

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
        $productcategory = Productcategory::find($id);
        $productcategory->delete();
        return redirect('/productcategories')->with('info','Selected Category has been deleted!');
    }


    /**
     *  Search For Resource(s)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

}
