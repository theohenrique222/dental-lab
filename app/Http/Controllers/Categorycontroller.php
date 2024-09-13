<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categiry)
    {
        return Category::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categiry)
    {
        //
    }
}
