@extends('layouts.admin')
@section('title', 'show single saving')
@section('content')

    <div class="container col-lg-6 col-md-offset-3 mt-5">

        <h5>{!! $saving->user->name !!}</h5>
        <h5> ₦{{number_format($saving->amount, 2)}} </h5>
        <p class="lead">{!! $saving->description !!}</p>

        <div class="well">
            <hr>
            <div class="row">

                <div class="col-sm-6">
                    <a href="{{route('admin.saving.edit', ['id' => $saving->id])}}" class="btn  btn-warning">Edit</a>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <form action="{{ route('admin.saving.destroy', ['id'=>$saving->id])}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </div>

            </div>
        </div>

    </div>

@endsection
