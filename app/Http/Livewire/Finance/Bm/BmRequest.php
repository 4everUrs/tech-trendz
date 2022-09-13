<?php

namespace App\Http\Livewire\Finance\Bm;

use Livewire\Component;
use App\Models\BudgetRequest;

class BmRequest extends Component
{
    public function render()
    {
        return view('livewire.finance.bm.bm-request',[
            'requests'=>BudgetRequest::all(),
        ]);
    }
}
