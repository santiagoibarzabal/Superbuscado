<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Address;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('addresses.create');
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
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'zipCode' => 'required|string',
            'apartment' => 'required|string'
          ]);

          auth()->user()->address()->create($request->all());

          return redirect('/addresses');


      }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        // $verDireccion = Address::find($id);
        return view('show', ['address' => $address]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      return view('addresses.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
      {
        $this->validate($request, [
          'address' => 'required|string',
          'city' => 'required|string',
          'province' => 'required|string',
          'zip_code' => 'required|string'
        ]);

        $address = auth()->user()->address;
        $diff = array_diff($request->all(), $address->toArray());
        $address->update($diff);

          return redirect('/profile');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
      $address->delete();
      return redirect('/addresses');
    }


}
