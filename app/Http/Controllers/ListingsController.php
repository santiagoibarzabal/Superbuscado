<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use App\Product;

use Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listings = auth()->user()->listings()->paginate(12);


      return view('listings.index', [
        'listings' => $listings,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|string|max:20',
      ]);

      auth()->user()->listings()->create($request->all());

      return redirect('/listings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('listings.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $listing = Listing::with('products')->find($id);

      // Buscar todos los id de productos para encontrar el price MAX/MIN
      $productId = Product::pluck('id');

      $priceRange = \DB::table('stocks')->select('product_id',  \DB::raw('MAX(list_price) as max_price'), \DB::raw('MIN(list_price) as min_price'))->whereIn('product_id', $productId) ->groupBy('product_id') ->get();



      // $totalProducts = Listing::withCount('products')->find($id);
      //
      // dd($totalProducts);
      return view('listings.edit', [
        'listing' => $listing,
        'priceRange' => $priceRange
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
      if(auth()->id() != $listing->user_id) {
        return redirect('/listings');
      }
      $listing->products()->detach();
      $listing->delete();

      return redirect('/listings');
    }

}
