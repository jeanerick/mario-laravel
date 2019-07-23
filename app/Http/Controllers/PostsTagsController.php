<?php

namespace App\Http\Controllers;

use App\PostsTags;
use Illuminate\Http\Request;

class PostsTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags');
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
     * @param  \App\PostsTags  $postsTags
     * @return \Illuminate\Http\Response
     */
    public function show(PostsTags $postsTags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostsTags  $postsTags
     * @return \Illuminate\Http\Response
     */
    public function edit(PostsTags $postsTags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostsTags  $postsTags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostsTags $postsTags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostsTags  $postsTags
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostsTags $postsTags)
    {
        //
    }
}
