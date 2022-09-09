<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Request Lists') }}
        </h2>
    </x-slot>

   <div class="row mt-4">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="row">
                    <div class="form-group col-6 ">
                        <input wire:model.debounce.300ms="search" type="text" class="form-control" placeholder="Search...">
                    </div>
                    <div class="form-group col">
                        <select wire:model="orderBy" id="grid-state" class="form-control">
                            <option value="id">ID</option>
                            <option value="from">From</option>
                            <option value="content">Content</option>
                            <option value="status">Status</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="orderAsc"id="grid-state" class="form-control">
                            <option value="1">Ascending</option>
                            <option value="0">Descending</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <select wire:model="perPage"id="grid-state" class="form-control dropdown btn-outline-primary">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        
                    </div>
                </div>
                <x-table :headers="['Id','From','Content','Status','Action']">
                    @forelse ($requests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->from }}</td>
                        <td>{{ $request->content }}</td>
                        <td>{{ $request->status }}</td>
                    </tr>
                    @empty
                    <p>No record found!</p>
                    @endforelse
                </x-table>
                {!! $requests->links() !!}
            </div>
        </div>
    </div>
   </div>
</x-app-layout>