@extends('layouts.app')

@section('content')
    <h1>View Users</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Matric</th>
                <th>Type</th>
                <th>Phone Number</th>
                <th>Registration Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->matric }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->phoneum }}</td>
                    <td>{{ $user->regDate }}</td>
                    <td>
                        <a href="{{ route('profile.edit', $user->id) }}">Edit</a> |
                        <a href="{{ route('profile.delete', $user->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
