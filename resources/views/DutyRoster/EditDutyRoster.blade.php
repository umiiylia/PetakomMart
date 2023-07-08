@extends('layouts.app')

@section('content')
    <h1>Edit Duty Roster</h1>

    <form action="{{ route('dutyRoster.update', $dutyRoster->Duty_ID) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $dutyRoster->Duty_title }}" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $dutyRoster->Duty_Description }}</textarea><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $dutyRoster->Duty_Date }}" required><br>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" value="{{ $dutyRoster->Duty_EndDate }}" required><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="{{ $dutyRoster->Duty_Status }}" required><br>


        <button type="submit">Update</button>
    </form>
@endsection
