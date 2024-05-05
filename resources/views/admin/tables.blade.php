@extends('layout.masterAdmin')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <h2>User List</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <!-- <th>Password</th> -->
                        <th>Created at</th>
                        <!-- <th>Updated at</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <!-- <td>{{ $user->password}}</td> -->
                            <td>{{ $user->created_at}}</td>
                            <!-- <td>{{ $user->updated_at}}</td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
