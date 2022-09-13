<div>
<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Transactions') }}
        </h2>
        
    </x-slot>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h4>Budget Request</h4>
                        <label>Select Originated Department</label>
                        <select wire:model="origin" class="form-control mb-2">
                            <option>HR</option>
                            <option>Logistics</option>
                            <option>Core</option>
                            <option>Finance</option>
                        </select>
                        <label>Category</label>
                        <select wire:model="category" class="form-control mb-2">
                            <option>Operating</option>
                            <option>Financial</option>
                            <option>Cash</option>
                            <option>Labor</option>
                        </select>
                        <label>Account</label>
                        <select wire:model="account" class="form-control mb-2">
                            <option>Cash</option>
                            <option>Card</option>
                        </select>
                        <label>Status</label>
                        <select wire:model="status" class="form-control mb-2">
                            <option>Approve</option>
                            <option>Pending</option>
                        </select>
                        <label>Amount</label>
                        <input wire:model="amount" type="number" class="form-control mb-2">
                        <label>Description</label>
                        <textarea wire:model="desc" class="form-control mb-4"></textarea>
                        <button wire:click="saveData" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>