@extends('layouts.admin')
@section('title', 'show single loan')
@section('content')

    <div class="container col-lg-6 col-md-offset-3 mt-5">

        <td>{{$loan->user->name}}</td>
        <td>₦{{number_format($loan->outstanding_balance, 2)}}</td>
        <td>{{$loan->guarantor->name}}</td>

        <div class="well">
            <hr>
            <div class="row">

                <div class="col-sm-6">
                    <a href="{{route('admin.loans.edit', ['id' => $loan->id])}}" class="btn  btn-warning">Edit</a>
                </div>

            </div>
        </div>

    </div>

@endsection

