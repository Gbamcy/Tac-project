@extends('layouts.admin')
@section('title', 'Listing of loans')
@section('content')
    <div class="container-fluid p-0 table-responsive">
        <div class="d-flex">
            <div class="flex-grow-1">
                <h3 class="text-center">Loan list</h3>
                <hr>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loanCreateModal">Create Loan</button>
            </div>
        </div>

        <!--- loan table --->
        <table  class="table">
            <thead>
            <tr>
                <th scope="col">S/No</th>
                <th scope="col">Name</th>
                <th scope="col">Outstanding Balance</th>
                <th scope="col">Interest</th>
                <th scope="col">Guarantor</th>
                <th scope="col">Due Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>

            @if($loans->isEmpty())
                <div> there are no loans</div>
            @else
                @foreach($loans as $index => $loan)
                    <tr>
                        <th scope="row">{{$index + 1}}</th>
                        <td>{{$loan->user->name}}</td>
                        <td>₦{{number_format($loan->outstanding_balance, 2)}}</td>
                        <td>₦{{number_format($loan->interest, 2)}}</td>
                        <td>{{$loan->guarantor->name}}</td>
                        <td>{{\Carbon\Carbon::parse($loan->due_date)->format('d-m-Y')}}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button onclick="setLoanId({{$loan->id}})" data-bs-toggle="modal" data-bs-target="#loanRepaymentModal" type="button" class="btn btn-info btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-credit-card"></i>
                                            </button>

                                            <a href="{{route('admin.loans.edit', ['id' => $loan->id])}}" data-bs-toggle="modal" data-bs-target="loanRepaymentModal" class="btn btn-success btn-floating">
                                                <i class="fas fa-magic">edit</i>
                                            </a>

                                            <div style="display: inline-block;">
                                                <form action="{{ route('admin.loans.destroy', ['id'=>$loan->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#loanRepaymentModal" class="btn btn-danger btn-floating mb-0" style="display: inline-block"><i class="fas fa-trash"></i></button>

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
    <!-- Modal -->

    <div class="modal fade" id="loanCreateModal" tabindex="-1" aria-labelledby="loanCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.loans.store')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="loanCreateModalLabel">Create Loan</h5>
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
                                    <label class="form-label">Due Date</label>
                                    <input type="date" class="form-control form-control-lg" placeholder="select date" name="due_date">
                                    @error('due_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label class="form-label">Select Guarantor</label>
                            <select class="form-select form-select-lg" name="guarantor_id">
                                <option value="" disabled>select guarantor</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            @error('guarantor_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Reason for loan</label>
                            <textarea class="form-control form-control-lg" rows="2" name="reason"></textarea>
                            @error('reason')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Loan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!--- loan repayment --->

    <div class="modal fade" id="loanRepaymentModal" tabindex="-1" aria-labelledby="loanRepaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin.repayments.store')}}" method="post">
                    @csrf
                    <input id="loan_id" name="loan_id" value="" class="d-none">
                    <div class="modal-header">
                        <h5 class="modal-title" id="RepayModalLabel">Loan Repayment</h5>
                        <button type="button" class="btn-close" data-mdb-ripple-init data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="Enter amount to pay">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Repay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal--->
 <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>View Loan</button>
                </div>

            </div>
        </div>
     {{$loans->links()}}

    </div>

@endsection
<script>
    function setLoanId(id) {
        document.getElementById("loan_id").setAttribute('value', id);
    }
</script>
