<!-- Display all members -->
@extends('layouts.app')

@section('content')
    <h1>Members List</h1>
    <a href="{{ route('members.create') }}">Add New Member</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phone_number }}</td>
                    <td>{{ $member->address }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member) }}">Edit</a>
                        <form action="{{ route('members.destroy', $member) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
