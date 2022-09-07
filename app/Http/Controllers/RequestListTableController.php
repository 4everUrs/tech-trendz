<?php

namespace App\Http\Controllers;

use App\Models\request_list_table;
use Illuminate\Http\Request;

class RequestListTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('livewire.logistic.procurement.requests-lists');
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
     * @param  \App\Models\request_list_table  $request_list_table
     * @return \Illuminate\Http\Response
     */
    public function show(request_list_table $request_list_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\request_list_table  $request_list_table
     * @return \Illuminate\Http\Response
     */
    public function edit(request_list_table $request_list_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\request_list_table  $request_list_table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, request_list_table $request_list_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\request_list_table  $request_list_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(request_list_table $request_list_table)
    {
        //
    }
}
