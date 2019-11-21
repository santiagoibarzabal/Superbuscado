<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Listing;

class ListingProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $products = Product::all();
      $listing = Listing::find($id);

      return view('products.index', ['products' => $products,'listing' => $listing]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Listing $listing, Request $request)
    {
        $product = Product::find($request->get('product_id'));
        $listing->products()->attach($product);

       return redirect ('/listings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar en la db los productos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //descripcion del producto
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // modificar la cantidad de un producto especifico de la lista
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
    public function destroy(Listing $listing, Request $request)
    {
       $product = Product::find($request->get('product_id'));
       $listing->products()->detach($product);

       return view('listings.edit', ['listing'=> $listing]);

    }
}
