@extends('layouts.app')

@section('content')
    <h1>View Duty Roster</h1>

    <table>
        <thead>
            <tr>
                <th>Duty ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dutyRosters as $dutyRoster)
                <tr>
                    <td>{{ $dutyRoster->Duty_ID }}</td>
                    <td>{{ $dutyRoster->Duty_title }}</td>
                    <td>{{ $dutyRoster->Duty_Description }}</td>
                    <td>{{ $dutyRoster->Duty_Date }}</td>
                    <td>{{ $dutyRoster->Duty_EndDate }}</td>
                    <td>{{ $dutyRoster->Duty_Status }}</td>
                    <td>
                        <a href="{{ route('dutyRoster.edit', $dutyRoster->Duty_ID) }}">Edit</a> |
                        <a href="{{ route('dutyRoster.delete', $dutyRoster->Duty_ID) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection