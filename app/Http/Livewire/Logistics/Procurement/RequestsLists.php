<?php

namespace App\Http\Livewire\Logistics\Procurement;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RequestsLists extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    
    public function render()
    {
        return view('livewire.logistics.procurement.request-lists', [
            'users' => User::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
