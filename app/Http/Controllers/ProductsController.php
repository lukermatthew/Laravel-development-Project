<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Productcategory;
use DB;

class ProductsController extends Controller
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
        /**
         *  read all the comments from DepartmentsController
         *  they are all the same.
         */
        
        $products = Product::orderBy('created_at', 'desc')->Paginate(4);
        return view('inv_mg.products.index')->with('products',$products);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        /**
         *  Get Departments so we can show department
         *  name on the department dropdown in the view
         */
      
        $productcategories = Productcategory::orderBy('category_name','asc')->get();
       
        /**
         *  return the view with an array of all these objects
         */
        return view('inv_mg.products.create')->with(['productcategories' => $productcategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /**
         *  validateRequest is a method defined in this controller
         *  which will validate  the form. we have created 
         *  it so we can reuse it in the update method with 
         *  different parameters.
         */
        $this->validateRequest($request,null);
       
        
        /**
         *  Note!
         *  before using storage we need to link it to 
         *  the public folder by typing the command,
         *  php artisan storage:link  
         */

        /**
         * 
         *  Handle the image file upload which will be stored
         *  in storage/app/public/employee_images
         */
        

        /**
         *  Create new object of Employee
         */
        $product = new Product();
        
        /**
         *  setEmployee is also a method of this controller
         *  which i have created, so i can use it for update 
         *  method.
         */
        
        $this->setProduct($product,$request);
        
        return redirect('/products')->with('info','New Products has been created!');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = Product::find($id);
        return view('inv_mg.products.show')->with('product',$product);

      
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
       /**
         *  this is same as create but with an existing
         *  employee
         */
        
        $productcategories  = Productcategory::orderBy('category_name','asc')->get();

        $product = Product::find($id);

        return view('inv_mg.products.edit')->with([
            'productcategories'  => $productcategories,
            'product'     => $product

        ]);
    
            
           
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
      
       
        $this->validateRequest($request,$id);
        $product = Product::find($id);
    
        /**
         *  updating an existing employee with setEmployee
         *  method
         */
       
        $this->setProduct($product,$request);
        return redirect('/products')->with('info','Selected Product has been updated!');

       
      
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('info','Selected Products has been deleted!');
    }

    /**
     *  Search For Resource(s)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function search(Request $request){
        $this->validate($request,[
            'search' => 'required'
        ]);
        $str = $request->input('search');
        $products = Product::where( 'product_name' , 'LIKE' , '%'.$str.'%' )
            ->orderBy('product_name','asc')
            ->paginate(4);
        return view('inv_mg.products.index')->with([ 'products' => $products ,'search' => true ]);
    
    }

      /**
     * This method is used for validating the form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return $this
     */
         private function validateRequest($request,$id){
        /**
         *  specifying the validation rules 
         */
        /**
         *  Below in Picture validation rules we are first checking
         *  that if there is an image, if not then don't apply the
         *  validation rules. the reason we are doing this is because
         *  if we are updating an employee but not updating the image. 
         */
        return $this->validate($request,[

            'Product_name' => 'required|min:2',
            'Product_details' => 'required|min:3',
            'productcategory'   =>  'required'
           
            /**
             *  if we are updating an employee but not changing the
             *  email then this will throw a validation error saying
             *  that email should be unique. that's why we need to specify
             *  the current employee to ignore the unique validation rule.
             *  Above in email rules , we are using a ternary operator simply
             *  saying that if we pass an id then it will ignore that employee
             *  (which we want in update) and if id's null then it will check
             *  every employee to be unique (which we want in create because
             *  every employee should have a unique email).
             *  check the documentation for more details, 
             *  https://laravel.com/docs/5.6/validation#rule-unique 
             */

            
        ]);
    }

    /**
     * Save a new resource or update an existing resource.
     *
     * @param  App\Product $product
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return Boolean
     */
    
    private function setProduct(Product $product,Request $request){
        $product->Product_name   = $request->input('Product_name');
        $product->Product_details   = $request->input('Product_details');
        $product->productcategory_id  = $request->input('productcategory');

        $product->save();
    }
}
