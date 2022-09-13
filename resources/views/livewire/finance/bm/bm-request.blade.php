<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Budget Request') }}
        </h2>
    </x-slot>
    <div class="card mt-3">
        <div class="card-body">
            <a href="{{ route('transaction') }}" class="btn btn-success">+New Transaction</a>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Origin</th>
                            <th>Category</th>
                            <th>Account</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @forelse ($requests as $request)
                                <tr>
                                    <td>{{$request->id}}</td>
                                    <td>{{$request->origin}}</td>
                                    <td>{{$request->category}}</td>
                                    <td>{{$request->account}}</td>
                                    <td>{{$request->amount}}</td>
                                    <td>{{$request->desc}}</td>
                                    <td>{{$request->status}}</td>
                                </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>