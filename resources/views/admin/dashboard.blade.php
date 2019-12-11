@extends('layouts.master')
@section('contents')
    Admin Dashboard
    {{Auth::user()->name}}
    <br><br>
    <h5>User List</h5>
    <div class="container">
        <div class="col-sm-8">
            <table>
                <thead>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Actions') }}</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if ($user->role_id == 1)
                            <td>Admin</td>
                        @elseif($user->role_id > 1)
                            <td>User</td>
                        @endif
                        <td>
                            @if ($user->role_id > 1)
                                <a class="btn" href="{{route('delete.user', ['id'=>$user->id])}}">Delete</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>

            {{$users->links()}}
        </div>
    </div>

@endsection
