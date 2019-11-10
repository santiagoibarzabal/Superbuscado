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
        $direcciones = Address::paginate(12);
        return view('addresses.index', [
          'addresses' => $direcciones,
        ]);
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
    public function store(Request $req)

      {

          $this->validate($request, [
            'address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'zipCode' => 'required|string'
          ]);

          Address::create($request->all());

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
    public function edit($id)
    {
      $editarDireccion = Address::find($id);

      return view('edit', ['address' => $editarDireccion]);
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

        $this->validate($request, [
          'campo1' => 'required',
          'campo2' => 'regla'
        ]);
          $address = Address::find($id);
          $diff = array_diff($address, $request->all());
          $address->update($diff);
          return redirect('/addresses');
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
