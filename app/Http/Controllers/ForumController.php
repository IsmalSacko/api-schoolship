<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForumStore;
use App\Http\Resources\ForumCollection;
use App\Models\Forum;
use App\Models\Lookups\Category;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ForumCollection(Forum::all());
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
     * @return ForumStore|Request
     */
    public function store(ForumStore $request)

    {

        return Forum::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $question
     * @return Forum
     */
    public function show(Forum $question)
    {
        return $question;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(ForumStore $request, Forum $question)
    {
        $question->update($request->all());
        return $question;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $question)
    {
        return $question->delete();
    }
}
