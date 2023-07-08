@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('profile.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

        <label for="matric">Matric:</label>
        <input type="text" id="matric" name="matric" value="{{ $user->matric }}" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="{{ $user->type }}" required><br>

        <label for="phoneum">Phone Number:</label>
        <input type="text" id="phoneum" name="phoneum" value="{{ $user->phoneum }}" required><br>

       
        <button type="submit">Update</button>
    </form>
@endsection
