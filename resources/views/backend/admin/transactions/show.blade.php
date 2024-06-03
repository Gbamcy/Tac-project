@extends('layouts.admin')
@section('title', 'show single transaction')
@section('content')

    <div class="container col-lg-6 col-md-offset-3 mt-5">

        <h5>{!! $transaction->user->name !!}</h5>
        <h5> ₦{{number_format($transaction->amount, 2)}} </h5>
        <h5>{!! $transaction->type !!}</h5>
        <p class="lead">{!! $saving->description !!}</p>

        <div class="well">
            <hr>
            <div class="row">

                <div class="col-sm-6">
                    <a href="{{route('admin.transaction.edit', ['id' => $transaction->id])}}" class="btn  btn-warning">Edit</a>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <form action="{{ route('admin.transaction.destroy', ['id'=>$transaction->id])}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </div>

            </div>
        </div>

    </div>

@endsection

