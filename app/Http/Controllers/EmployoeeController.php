<?php

namespace App\Http\Controllers;

use App\Employoee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
class EmployoeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Employoee  $employoee
     * @return \Illuminate\Http\Response
     */
    public function show(Employoee $employoee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employoee  $employoee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employoee $employoee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employoee  $employoee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employoee $employoee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employoee  $employoee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employoee $employoee)
    {
        //
    }
    public function list(Request $request){
        $list = DB::table('Employoees')
            ->join('departments', 'departments.id', '=', 'employoees.department_id')
            ->select('employoees.*', 'departments.*')
            ->get();
        // return json_encode([
        //     'list'=>$list
        // ]);
        return view('list',[
            'lists'=>$list
        ]);
    }
}
