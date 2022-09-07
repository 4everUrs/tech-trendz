<?php

namespace App\Http\Controllers\logistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index()
    {
        return view ('livewire.logistic.procurement.requests-lists');
    }
}
