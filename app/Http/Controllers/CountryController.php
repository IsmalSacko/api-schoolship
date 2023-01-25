<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryStore;
use App\Http\Resources\CountryCollection;
use App\Models\Lookups\Country;
use APP\Http\Resources\Country as CountryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CountryCollection
     */
    public function index()
    {
        return new CountryCollection(Country::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CountryStore $request)
    {
        return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStore $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lookups\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return $country;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lookups\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Country $country)
    {
        $validator=$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        $country->update($request->all());
        return $country;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lookups\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $validator=$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        $country->update($request->all());
        return $country;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lookups\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //$country->delete();
        //return response()->json(null, 204);
    }


    public function getRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required',
        ]);
    }
}
