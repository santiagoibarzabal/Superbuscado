<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;

use App\Listing;

use App\Product;

use App\Stock;

use App\Store;

use App\Market;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

      // $userAddress = auth()->user()->address;
      //
      // $geolocation = curl_init('https://maps.googleapis.com/maps/api/geocode/json?address=' . str_replace(' ', '+', $userAddress->address) . ',+' . str_replace(' ', '+', $userAddress->city) . ',+' . str_replace(' ', '+', $userAddress->province) . '&key='. env('GMAPS_KEY'));
      //
      // $json = curl_exec($geolocation);


      // $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=' . env('GMAPS_KEY');

      // Buscar todos los products de la listing que estén en stock y traer los stores con su market
      // $listing = Listing::with(['products' => function ($products) {
      //   return $products->with('stocks')->whereHas('stocks', function ($stocks) {
      //     return $stocks->with('store', 'store.market')->where('quantity', '>=', 0);
      //   });
      // }])->find($id);

      $listing = Listing::with(['products' => function ($product) {
        return $product->with(['stocks' => function ($stock){
          return $stock->where('quantity', '>', 0)->with(['store' => function($store){
            return $store->where('zip_code', auth()->user()->address->zip_code);
          }]);
        }]);
      }])->find($id);

      // dd($listing->products[0]->stocks[0]->store);

      // $nears = $listing->products->filter(function ($p) {
      //   return $p->stocks->filter(function ($s) {
      //     return $s->store->zip_code == auth()->user()->address->zip_code;
      //   });
      // });

      // $nears = Store::where('zip_code', auth()->user()->address->zip_code)->get();
      //
      // $markets = Market::with()->store;
      // dd($markets);

      $markets = Market::all();


      return view('carts.index', [
        'listing' => $listing,
        // 'nears' => $nears,
        'markets' => $markets
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
