<?php

namespace App\Http\Controllers;

use App\pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return pizzas::all();
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
     * @param  \App\pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function show(pizzas $pizzas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function edit(pizzas $pizzas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pizzas $pizzas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function destroy(pizzas $pizzas)
    {
        //
    }
}
