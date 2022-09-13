<?php

namespace App\Http\Livewire\Finance\Bm;

use Livewire\Component;
use App\Models\BudgetRequest;
class Transactions extends Component
{
    
    public $origin, $category, $account, $amount, $desc, $status;
    protected $rules = [
        'origin' => 'required|string',
        'category' => 'required|string',
        'account' => 'required|string',
        'amount' => 'required|integer',
        'desc' => 'required|string',
        'status' => 'required|string',
        
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function render()
    {
        return view('livewire.finance.bm.transactions');
    }
    
    public function saveData()
    {
        
        $validatedData = $this->validate();
        BudgetRequest::create($validatedData);

        return redirect()->route('request')->with('message','Successfully Added');

    }
}
