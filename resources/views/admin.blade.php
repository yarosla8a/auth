@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <div class="row">


            <h2>Users</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>login</th>
                        <th>email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>

                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->login}}</td>
                        <td>{{$user->email}}</td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>
</div>



@endsection
