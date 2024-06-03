@extends('layouts.admin')
@section('title','users of the platform')
@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="user_head">Platform users </h3>
                <hr>
            </div>

            @if ($users->isEmpty())
                <p> There is no user.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th class="th">ID</th>
                        <th class="th">Name</th>
                        <th class="th">Email</th>
                        <th class="th">Joined</th>
                        <th class="th">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{!! $user->id !!}</td>
                            <td>
                                <a href="#" class="td">{!! $user->name !!} </a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>{{ \carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
{{--                                            <a href="{{route('admin.user.edit', ['id' => $user->id])}}" class="btn btn-success btn-floating">--}}
{{--                                                <i class="fas fa-magic"></i>--}}
{{--                                            </a>--}}
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#ViewModal" class="btn btn-success btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-dark btn-floating" data-mdb-ripple-init>
                                                <i class="fas fa-magic"></i>
                                            </button>

{{--                                            <div style="display: inline-block;">--}}
{{--                                                <form action="{{ route('admin.user.destroy', ['id'=>$user->id]) }}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}

{{--                                                    <button type="submit" class="btn btn-danger btn-floating" style="display: inline-block"><i class="fas fa-trash"></i></button>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
                                        </li>

                                    </ul>
                                </div>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {!! $users->links() !!}
            @endif
        </div>
    </div>
@endsection




































































{{--    --}}
{{--    --}}
{{--    <div class="container-fluid p-0">--}}
{{--       <h3>List of users</h3>--}}
{{--        @if($users->isEmty())--}}
{{--            <p>There is no user</p>--}}
{{--        @else--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Id</th>--}}
{{--                    <th>name</th>--}}
{{--                    <th>email</th>--}}
{{--                    <th>Joined</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}

{{--                <tbody>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $user->id }} </td>--}}
{{--                            <td>{{ $user->name }}</td>--}}
{{--                            <td>{{ $user->email }}</td>--}}
{{--                            <td>{{ \carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}

{{--                </tbody>--}}
{{--            </table>--}}
{{--            {{$users->links()}}--}}
{{--        @endif--}}

{{--    </div>--}}
{{--@endsection--}}

