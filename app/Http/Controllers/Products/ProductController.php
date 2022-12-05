<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
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
      return view('admin.product.index ');
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
        //dd($categories);
       
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ProductRequestValidation $request)
    {
          $validated = $request->validated();
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
