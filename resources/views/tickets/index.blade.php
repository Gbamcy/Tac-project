@extends('layouts.admin')
@section('title','all tickets')
@section('content')
    <div class="card">
        <div class="card-header ">
            <h4 class="float-left">Supporters List</h4>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            @if ($tickets->isEmpty())
                <p> There is no ticket.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id }} </td>
                            <td>{{ $ticket->title }}</td>
                            <td>{{ $ticket->status ? 'Pending' : 'Answered' }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <button onclick="setLoanId({{$ticket->id}})" data-bs-toggle="modal" data-bs-target="#loanRepaymentModal" type="button" class="btn btn-info btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-credit-card"></i>
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#ViewModal" class="btn btn-success btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-dark btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-history"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $tickets->links() }}
            @endif
        </div>


    </div>

@endsection

