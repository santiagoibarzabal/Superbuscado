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

      // --------------------------  GEOLOCATION  --------------------------

      // $userAddress = auth()->user()->address;
      //
      // $geolocation = curl_init('https://maps.googleapis.com/maps/api/geocode/json?address=' . str_replace(' ', '+', $userAddress->address) . ',+' . str_replace(' ', '+', $userAddress->city) . ',+' . str_replace(' ', '+', $userAddress->province) . '&key='. env('GMAPS_KEY'));
      //
      // $json = curl_exec($geolocation);
      // dd($json);

      // --------------------------  QUERY SQL  --------------------------

      // select
      // sum(stk.list_price*lspr.quantity) as total_price,
      // sum(lspr.quantity),
      // count(lspr.listing_id),
      // m.id MarketId,
      // st.id StoreId,
      // st.zip_code StoreZip_code,
      // us.id UserId,
      // ad.zip_code AddressUser,
      // lspr.listing_id ListingId,
      // lspr.product_id ProductId,
      // lspr.quantity QuantityProducts,
      // stk.list_price ListPrice,
      // stk.quantity QuantityStock
      //
      // from stocks as stk
      // join stores as st on stk.store_id = st.id
      // join markets as m on st.market_id = m.id
      // join listing_product as lspr on stk.product_id = lspr.product_id
      // join listings as ls on lspr.listing_id = ls.id
      // join users as us on ls.user_id = us.id
      // join addresses as ad on us.id = ad.user_id
      //
      // WHERE (st.zip_code = ad.zip_code)
      // GROUP by st.id, lspr.listing_id
      // ORDER BY total_price


      $list = Listing::find($id);

      $query = \DB::table('stocks')
                  ->select(
                  // \DB::raw('COUNT(listing_product.listing_id) as count'),
                  \DB::raw('SUM(stocks.list_price*listing_product.quantity) as total_price'),
                  \DB::raw('SUM(listing_product.quantity) as total_quantity'),
                  'stores.address as store_address',
                  'markets.name as market_name',
                  'markets.logo as logo',
                  'stores.zip_code as store_zip_code', 'listing_product.listing_id',
                  'listing_product.product_id',
                  'listing_product.quantity as product_quantity',
                  'users.id as user_id',
                  'addresses.zip_code as address_zip_code',
                  'stocks.list_price',
                  'stocks.quantity as stoks_quantity')

                  ->join('stores', 'stocks.store_id', '=', 'stores.id')
                  ->join('markets', 'stores.market_id', '=', 'markets.id')
                  ->join('listing_product', 'stocks.product_id', '=', 'listing_product.product_id')
                  ->join('listings', 'listing_product.listing_id', '=', 'listings.id')
                  ->join('users', 'listings.user_id', '=', 'users.id')
                  ->join('addresses', 'users.id', '=', 'addresses.user_id')
                  ->where('stores.zip_code', auth()->user()->address->zip_code)
                  ->groupBy('listings.id', 'stores.id')
                  ->orderBy('total_price')

                  // ->offset(20000)
                  // ->limit(10)
                  ->get();



      // --------------------------  INTENTO DE QUERY  --------------------------

      // $listing = Listing::with(['products' => function ($product) {
      //   return $product->with(['stocks' => function ($stock){
      //     return $stock->where('quantity', '>', 0)->with(['store' => function($store){
      //       return $store->where('zip_code', auth()->user()->address->zip_code);
      //     }]);
      //   }]);
      // }])->find($id);


      return view('carts.index', [
        'query' => $query,
        'list' => $list
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
