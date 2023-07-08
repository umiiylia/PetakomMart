@extends('layouts.app')

@section('content')
    <h1>Delete Duty Roster</h1>

    <p>Are you sure you want to delete this duty roster?</p>
    <p>Duty ID: {{ $dutyRoster->Duty_ID }}</p>
    <p>Title: {{ $dutyRoster->Duty_title }}</p>
    <p>Description: {{ $dutyRoster->Duty_Description }}</p>
    <p>Date: {{ $dutyRoster->Duty_Date }}</p>
    <p>End Date: {{ $dutyRoster->Duty_EndDate }}</p>
    <p>Status: {{ $dutyRoster->Duty_Status }}</p>

    <form action="{{ route('dutyRoster.destroy', $dutyRoster->Duty_ID) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
@endsection
