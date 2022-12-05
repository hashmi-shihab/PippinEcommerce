<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\ProductRequestValidation;

use App\Repositories\Interfaces\categoryRepositoryInterface;
use App\Repositories\Interfaces\productRepositoryInterface;


class ProductController extends Controller
{
       private $categoryRepository;
      private $productRepository;

       public function __construct(categoryRepositoryInterface $categoryRepository, productRepositoryInterface $productRepository)
    {
        $this->categoryRepository= $categoryRepository;
        $this->productRepository= $productRepository;
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->all();

        // dd($products);
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
       
          $this->data = $this->categoryRepository->getCategoryDropdown();
          $categories= $this->data;
      
       
        return view('admin.product.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequestValidation $request)
    {
     

            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'image/products';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

             $product=  $this->productRepository->create($input); 
            return redirect()->back()->with('success', 'Product  created successfully.');
           
    
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
    public function edit(Product $product)
    {
        $product = $this->productRepository->show($product->id);
          $this->data = $this->categoryRepository->getCategoryDropdown();
          $categories= $this->data;
        return view('admin.product.edit',compact('product','categories'));
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
