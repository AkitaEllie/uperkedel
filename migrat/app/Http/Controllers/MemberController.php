<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Display all members
    public function index()
    {
        $members = Member::all();  // Retrieve all members
        return view('members.index', compact('members'));
    }

    // Show the form to create a new member
    public function create()
    {
        return view('members.create');
    }

    // Store a new member
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'phone_number' => 'required|digits:10',
            'address' => 'required|string|max:255',
        ]);

        Member::create($validated);  // Insert new member to the database
        return redirect()->route('members.index');  // Redirect back to the list of members
    }

    // Show the form to edit a member
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    // Update the member
    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email,' . $member->id,
            'phone_number' => 'required|digits:10',
            'address' => 'required|string|max:255',
        ]);

        $member->update($validated);
        return redirect()->route('members.index');
    }

    // Delete a member
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }
}
    