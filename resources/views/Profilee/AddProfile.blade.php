@extends('layouts.app')

@section('content')
    <h1>Add User</h1>

    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="matric">Matric:</label>
        <input type="text" id="matric" name="matric" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="phoneum">Phone Number:</label>
        <input type="text" id="phoneum" name="phoneum" required><br>

        <label for="regDate">Registration Date:</label>
        <input type="date" id="regDate" name="regDate" required><br>

        <button type="submit">Add</button>
    </form>
@endsection
