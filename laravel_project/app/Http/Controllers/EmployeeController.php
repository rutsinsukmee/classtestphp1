<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    # public function index()
    #{
    #    $data = [
    #       "employees" => Employee::getAll() ,
    #    ];
    #    return view('employee/index',$data);
    #}

    /* public function index(Request $request){
        //GET KEYWORD FROM URL
        $q = $request->input('q');

        //METHOD : 1 LONG
        //NOT EMPTY = HAVE SOME KEYWORD in $q
        if(!empty($q)){ 
            $employees = Employee::search($q);
        }else{
            $employees = Employee::getAll();
        }

        //PACK DATA
        $data = [
            "employees" => $employees ,
            "q" => $q,    //send $q to display in view
        ];
        
        //DISPLAY IN VIEW
        return view('employee/index',$data);
    } */

    public function index(Request $request){
        //GET KEYWORD FROM URL
        $q = $request->input('q');

        //METHOD : 2 SHORT
        //NOT EMPTY = HAVE SOME KEYWORD in $q
        $employees = ( !empty($q) ) ? 
        Employee::search($q) : 
        Employee::getAll();

        //PACK DATA
        $data = [
            "employees" => $employees ,
            "q" => $q,    //send $q to display in view
        ];
        
        //DISPLAY IN VIEW
        return view('employee/index',$data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            "employee" => Employee::getItem($id),
        ];
        return view('employee/show',$data);
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
