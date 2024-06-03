@extends('layouts.master')
@section('title','blog')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{route('posts.store')}}" method="post">
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
                    <h4 class="text-center mt-3">Make post</h4>
                    <div class="form-group mb-2">
                        <label class="form-label" for="for">Message title:</label>
                        <input type="text" class="form-control" name="title" />

                    </div>

                    <div class="form-group mb-2">
                        <label class="form-label" for="for">Description:</label>
                        <textarea class="form-control"  rows="2" name="description"></textarea>

                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-2">Send</button>
                    <h5 class="feedback text-center">Recent posts </h5>

                </form>

                <div  style="background-color: white" >
                    @if(count($posts))
                        @foreach($posts as $post)
{{--                            <a class="text" href="{{route('posts.show', ['id' => $post->id])}}">--}}
                                <div class="card">
                                    <div class="card-header">
                                        <b>{!! $post->title !!}</b>

                                        <div class=" card-body">
                                            {!! $post->description !!}
                                            <p><small class="small mt-5">Posted: {{ \carbon\Carbon::parse($post->created_at)->diffForHumans() }} </small></p>
{{--                                            <small class="small mt-5">Posted on: {{date('Mj,Yh:ia',strtotime($post->created_at))}}</small>--}}
                                        </div>
                                        <div class="card-footer">

                                        </div>

                                    </div>

                                </div>
                            </a>

                        @endforeach
                    @else
                        <p>There are no posts</p>
                    @endif

                </div>


            </div>

        </div>

    </div>
@endsection
