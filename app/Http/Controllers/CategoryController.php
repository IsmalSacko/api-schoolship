<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lookups\CategoryCollection;
use App\Models\Lookups\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CategoryCollection
     */
    public function index()
    {
   // return Category::all();
        return new CategoryCollection(Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $validator=$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        return Category::create($request->all());
    }

    /**
     * Display the specified category resource.
     *
     * @param  \App\Models\Lookups\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lookups\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Category $category)
    {
        $validator=$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        Category::find($category->id)->update($request->all());
        return $category;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lookups\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Category $category)
    {
        $validator =$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        $category->update($request->all());
        return $category;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lookups\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $validator=$this->getRequest($request);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        //$category->delete();
        //return Category::all();
    }

    public function getRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required',
        ]);
    }
}
