@extends('layouts.admin')
@section('title','index')
@section('content')
    <div class="container col-md-10 mt-3">
        <div class="card">
            <div class="card-header ">
                <h5 class="text-center" style="color: #000;">Users</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if ($users->isEmpty())
                    <p> There are no posts.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>Joined</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }} </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ \carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                <td>    <a href="{{route('admin.user.edit', ['id' => $user->id])}}" class="btn btn-success btn-floating">
                                        <i class="fas fa-magic"></i>
                                    </a>
                                    <button type="button" class="btn btn-dark btn-floating" data-mdb-ripple-init>
                                        <i class="fas fa-history"></i>
                                    </button>

                                    <div style="display: inline-block;">
                                        <form action="{{ route('admin.user.destroy', ['id'=>$user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-floating" style="display: inline-block"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

@endsection
