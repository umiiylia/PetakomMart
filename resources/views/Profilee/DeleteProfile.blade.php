@extends('layouts.app')

@section('content')
    <h1>Delete User</h1>

    <p>Are you sure you want to delete this user?</p>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Matric: {{ $user->matric }}</p>
    <p>Type: {{ $user->type }}</p>
    <p>Phone Number: {{ $user->phoneum }}</p>
    <p>Registration Date: {{ $user->regDate }}</p>

    <form action="{{ route('profile.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
@endsection
