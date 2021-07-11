<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return (customer::get()->keyBy('indeks'));
        // $customer = Customer::get()->keyBy('indeks');
        // dd($customer);

        // $countIndeks = [];
        // foreach (Customer::Indeks as $key => $value) {
        //     $countIndeks[] = count((array)[$customer]);
            // dd(countIndeks);
        // }
        // return ($countIndeks);
        // dd($countIndeks);
        // return $countIndeks;
        // return Customer::get()->keyBy('indeks');
        return CustomerResource::collection(Customer::all()->keyBy->indeks);
    }

    // return dd(customer::get()->keyBy('indeks'));
        // count($customer['Ab']);
        // return CustumerResource::with(['custumer'])->withCount('customer');
        // return CustomerResource::collection(Customer::all()->keyBy->indeks);
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
