@extends('layouts.admin')
@section('title','Edit loans')
@section('content')
    <div class="container mt-4">
        <div class="jumbotron">
            <button class="btn btn btn-default" ><a href="{{url('admin/loans')}}">Back</a></button>
            <div class="row  justify-content-center align-items-center">
                <div class="col-md-6">
                    <form action="{{route('admin.loans.edit', ['id' => $loan->id])}}" method="Post">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @csrf
                        <input type="text" class="d-none" name="user_id" value="{{ $loan->user->id}}" required>

                        <div class=" form-outline my-3" data-mdb-input-init>
                            <input type="text" id="form1" value="{{$loan->user->name}}" class="form-control" disabled />
                            <label class="form-label" for="form12">Name</label>
                        </div>


                        <div class="form-outline my-3">
                            <input type="number" class="form-control " disabled name="amount"  value="{{number_format($loan->amount, 2)}}" required>
                            <label class="form-label" for="form12">Amount</label>

                        </div>

                        <div class="form-outline my-3">
                            <textarea type="text" name="description" class="form-control" disabled  value="{!! $loan->description !!}"></textarea>
                            <label class="form-label" for="form12">Description</label>
                        </div>

                        <div class="form-outline">
                            <button type="submit" class="btn btn-block btn-primary" disabled>Post</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
    {{--    i did not use update as part of the crud because the app is a financial app--}}
@endsection




