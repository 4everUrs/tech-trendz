<?php

namespace App\Http\Controllers;

use App\Models\RequestList;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;


class RequestListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        use WithPagination;
        protected $paginationTheme = 'bootstrap';
        public $perPage = 10;
        public $search = '';
        public $orderBy = 'id';
        public $orderAsc = true;
        
    public function index()
    {
        return view('livewire.logistics.procurement.requests-lists', [
            'requests' => RequestList::paginate($this->perPage),
            
            
            // search($this->search)
            //     ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            //     ->simplePaginate($this->perPage),
        ]);
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
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function show(RequestList $requestList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestList $requestList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestList $requestList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestList  $requestList
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestList $requestList)
    {
        //
    }
}
