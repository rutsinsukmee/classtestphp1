<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //GET KEYWORD FROM URL
        $q = $request->input('q');

        //METHOD : 2 SHORT
        //NOT EMPTY = HAVE SOME KEYWORD in $q
        $vehicles = ( !empty($q) ) ? 
        Vehicle::search($q) : 
        Vehicle::getAll();

        //PACK DATA
        $data = [
            "vehicles" => $vehicles ,
            "q" => $q,    //send $q to display in view
        ];
        
        //DISPLAY IN VIEW
        return view('vehicle/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vehicle/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = $request->all();
        //$item = $request->except(['_method','_token']);
        $vehicle = Vehicle::storeItem($item);
        $id = $vehicle->id;
        $brand = $vehicle->brand;
        $series = $vehicle->series;
        $colour = $vehicle->colour;
        $year = $vehicle->year;
        $mileage = $vehicle->mileage;
        return redirect("/vehicle");
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
