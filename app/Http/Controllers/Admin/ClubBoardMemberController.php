<?php

namespace App\Http\Controllers\Admin;

use App\ClubBoardMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Club;
use Auth;

class ClubBoardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clubs = Club::all();
        $club_id = $request->get('club_id', session()->get('club_id', 0));
        $club = Club::find($club_id);
        if ($club) {
            $club_board_members = $club->club_board_members;
        } else {
            $club_board_members = ClubBoardMember::all();
        }

        session()->put('club_id', $club_id);

        return view('admin.club_board_members.index', compact('club_board_members', 'clubs', 'club_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', ClubBoardMember::class);

        if (Auth::user()->isClubAdmin()) {
            $club = Club::findOrFail(Auth::user()->club_id);
            $clubs = [$club];
        } else {
            $clubs = Club::all();
        }
        
        $club_id = session()->get('club_id', 0);

        return view('admin.club_board_members.create', compact('clubs', 'club_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', ClubBoardMember::class);

        $request->validate([
            'club_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);

        $club_id = $request->get('club_id');
        $club = Club::findOrFail($club_id);

        $member = new ClubBoardMember;
        $member->name = trim($request->get('name'));
        $member->phone = trim($request->get('phone'));
        $member->address = trim($request->get('address'));
        $member->zipcode = trim($request->get('zipcode'));
        $member->city = trim($request->get('city'));
        $member->country = trim($request->get('country'));
        $member->role = trim($request->get('role'));
        
        $club->club_board_members()->save($member);

        $request->session()->flash('message', "A new club board member '{$member->name}' is created successfully!");

        return redirect('/admin/club_board_members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClubBoardMember  $member
     * @return \Illuminate\Http\Response
     */
    public function show(ClubBoardMember $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClubBoardMember  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(ClubBoardMember $member)
    {
        $this->authorize('update', $member);

        $clubs = Club::all();

        return view('admin.club_board_members.edit', compact('member', 'clubs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClubBoardMember  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClubBoardMember $member)
    {
        $this->authorize('update', $member);

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);

        $member->name = trim($request->get('name'));
        $member->phone = trim($request->get('phone'));
        $member->address = trim($request->get('address'));
        $member->zipcode = trim($request->get('zipcode'));
        $member->city = trim($request->get('city'));
        $member->country = trim($request->get('country'));
        $member->role = trim($request->get('role'));
        
        $member->save();

        $request->session()->flash('message', "Club board member '{$member->name}' is updated successfully!");

        return redirect('/admin/club_board_members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClubBoardMember  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClubBoardMember $member)
    {
        $this->authorize('delete', $member);

        $name = $member->name;
        $member->delete();

        session()->flash('message', "Club board member '{$name}' is deleted successfully!");

        return redirect('/admin/club_board_members');
    }
}
