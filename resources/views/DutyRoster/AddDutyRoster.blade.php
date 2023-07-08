@extends('layouts.app')

@section('content')
    <h1>Add Duty Roster</h1>

    <form action="{{ route('dutyRoster.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" required><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br>

       

        <button type="submit">Add</button>
    </form>
@endsection
