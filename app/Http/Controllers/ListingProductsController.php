<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Listing;

use App\Category;

class ListingProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      // Buscar la lista que seleccionamos por $id
      $listing = Listing::find($id);
      // Traer todos los productos
      $products = Product::all();
      // Buscar la categoria de los productos
      $categories = Category::parent()->with('children')->find($products);

      // $productsInList = $listing->products->pluck('id');
      // $products = Product::whereNotIn('id', $productsInList)->get();

      return view('products.index', [
        'products' => $products,
        'listing' => $listing,
        'categories' => $categories
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Listing $listing, $id)
    {
      // Buscar de todos los productos, el $id seleccionado
      $product = Product::find($id);

      // Agregar a la lista el producto en la tabla pivot en la columna quantity
      $listing->products()->attach([
        $product->id => ['quantity' => 1]
      ]);

      // Actualizar la lista en la columna quantity y refrescar el valor cada vez que se agrega un nuevo producto (independientemente del id que sea ese producto). products_count esta declarado en el modelo de li

      // $listing->update([
      //   'quantity' => $listing->fresh()->products_count
      // ]);

      $listing->increment('quantity');

      return redirect ("/listings/".$listing->id."/edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Listing $listing, $id)
    {
      \DB::table('listing_product')
      ->where([
        'listing_id' => $listing->id,
        'product_id' => $id,
      ])
      ->increment('quantity');

      $listing->increment('quantity');

      return redirect("/listings/".$listing->id."/edit");
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing, $product)
    {

       $listing->products()->detach($product);

       $listing->update([
         'quantity' => $listing->fresh()->products_count
       ]);

       return redirect("/listings/".$listing->id."/edit");

    }
}
