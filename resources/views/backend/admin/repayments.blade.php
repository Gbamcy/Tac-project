@extends('layouts.admin')
@section('title', 'Loan repayment')
@section('content')
    <div class="container-fluid p-0">
        <div class="d-flex">
            <div class="flex-grow-1">
                <h3 class="text-center">Repayment List</h3>
                <hr>
            </div>

        </div>
        <!--- loan table --->
        <table class="table">
            <thead>
            <tr>
                <th scope="col">S/No</th>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @if($repayments->isEmpty())
                <div> there are no repayment</div>
            @else
                @foreach($repayments as $index => $repayment)
                    <tr>
                        <th scope="row">{{$index + 1}}</th>
                        <td>{{$repayment->loan->user->name}}</td>
                        <td>₦{{number_format($repayment->amount, 2)}}</td>
                        <td>{{\Carbon\Carbon::parse($repayment->loan->due_date)->format('d-m-Y')}}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <button onclick="setLoanId({{$repayment->id}})" data-bs-toggle="modal" data-bs-target="#loanRepaymentModal" type="button" class="btn btn-info btn-floating" data-mdb-ripple-init>
                                            <i class="fas fa-credit-card"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#ViewModal" class="btn btn-success btn-floating" data-mdb-ripple-init>
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-dark btn-floating" data-mdb-ripple-init>
                                            <i class="fas fa-history"></i>
                                        </button>

                                        <div style="display: inline-block;">
                                            <form action="{{ route('admin.repayments.destroy', ['id'=>$repayment->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" data-bs-toggle="modal" data-bs-target="loanRepaymentModal" class="btn btn-danger btn-floating" style="display: inline-block" data-mdb-ripple-init><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </td>

                    </tr>

                @endforeach
            @endif

            </tbody>

        </table>

    </div>

@endsection
