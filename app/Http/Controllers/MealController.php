<?php

namespace App\Http\Controllers;

use App\Meal;
use App\User;
use Illuminate\Http\Request;
use Auth;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meal = new Meal($request->all());
        $meal->user_id = Auth::user()->id;
        $meal->save();
        return redirect()->route('food@create',$meal->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
