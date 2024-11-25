<!-- Edit an existing member -->
@extends('layouts.app')

@section('content')
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $member->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $member->email }}" required>
        </div>
        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ $member->phone_number }}" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ $member->address }}" required>
        </div>
        <button type="submit">Update Member</button>
    </form>
@endsection
