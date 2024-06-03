@extends('layouts.admin')
@section('title','transactions')
@section('content')
    <div class="container-fluid">
        <div class="d-flex">
            <div class="flex-grow-1">
                <h3 class="text-center" id="transaction">List of transactions</h3>
                <hr>
            </div>
            <!-- Button trigger modal -->
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Make Transaction
                </button>
            </div>

        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">S/No</th>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @if($transactions->isEmpty())
                <div>There are no transactions</div>
            @else
                @foreach ($transactions as $index => $transaction)
                    <tr>
                        <th scope="row">{{$index + 1}}</th>
                        <td>{{$transaction->user->name}}</td>
                        <td>₦{{number_format($transaction->amount, 2)}}</td>
                        <td>{{$transaction->type}}</td>
                        <td>{{$transaction->description}}</td>
                        <td>{{\Carbon\Carbon::parse($transaction->due_date)->format('d-m-Y')}}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('admin.transaction.edit', ['id' => $transaction->id])}}" class="btn btn-success btn-floating">
                                            <i class="fas fa-magic"></i>
                                        </a>
                                        <button type="button" class="btn btn-dark btn-floating" data-mdb-ripple-init style="display: inline-block">
                                            <i class="fas fa-history"></i>
                                        </button>

                                        <div style="display: inline-block;">
                                            <form action="{{ route('admin.transaction.destroy', ['id'=>$transaction->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-floating" style="display: inline-block"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </td>

                    </tr>

                @endforeach
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            </tbody>

        </table>

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-----form----->
                        <form action="{{route('admin.transactions.store')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="loanCreateModalLabel">Make Transaction</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label class="form-label">Select Beneficiary</label>
                                    <select class="form-select form-select-lg" name="user_id">
                                        <option value="" disabled>select user</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('user_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Amount</label>
                                            <input type="number" class="form-control form-control-lg" placeholder="Enter amount" name="amount">
                                            @error('amount')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group mb-2">

                                            <label class="form-label">Transaction Type</label>
                                            <select class="form-select" aria-label="Default select example" name="type">
                                                <option value="default">Transaction type</option>
                                                <option value="credit">Credit</option>
                                                <option value="debit">Debit</option>
                                            </select>
                                            @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control form-control-lg" rows="2" name="description"></textarea>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Transact</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

