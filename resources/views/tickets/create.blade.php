@extends('layouts.master')
@section('title','create a new support')
@section('content')
    <div class="container-fluid mb-5 mt-5" id="requestLoan">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{route('tickets.store')}}" method="POST">
                    @if (isset($errors) && $errors->any())
                        @foreach ($errors->all() as $error)

                        @endforeach
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    <fieldset>
                        <legend class="text-center">How can we help you?..</legend>
                        <div class="form-group mb-2">
                            <label for="title" class="col-lg control-label">Title</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ old('title') }}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg control-label">Content</label>
                            <div class="col-lg-10">
                                <textarea class="form-control"id="content" placeholder="description" name="content"></textarea>
                                <span class="help-block">Feel free to ask any question</span>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-warning">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit
                                </button>
                            </div>
                        </div>
                    </fieldset>

                </form>

            </div>

        </div>

    </div>

@endsection
