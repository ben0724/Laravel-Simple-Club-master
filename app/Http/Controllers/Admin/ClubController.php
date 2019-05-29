<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Club;
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return view('admin.clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Club::class);

        return view('admin.clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Club::class);

        $request->validate([
            'name' => 'required',
            'shortname' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'siteurl' => 'required|url',
        ]);

        $club = new Club;
        $club->name = trim($request->get('name'));
        $club->shortname = trim($request->get('shortname'));
        $club->address = trim($request->get('address'));
        $club->zipcode = trim($request->get('zipcode'));
        $club->city = trim($request->get('city'));
        $club->country = trim($request->get('country'));
        $club->email = trim($request->get('email'));
        $club->siteurl = trim($request->get('siteurl'));
        $club->save();

        $request->session()->flash('message', "A new club '{$club->name}' is created successfully!");

        return redirect('/admin/clubs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::findOrFail($id);

        $this->authorize('update', $club);

        return view('admin.clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'shortname' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required|email',
            'siteurl' => 'required|url',
        ]);

        $club = Club::findOrFail($id);

        $this->authorize('update', $club);

        $club->name = trim($request->get('name'));
        $club->shortname = trim($request->get('shortname'));
        $club->address = trim($request->get('address'));
        $club->zipcode = trim($request->get('zipcode'));
        $club->city = trim($request->get('city'));
        $club->country = trim($request->get('country'));
        $club->email = trim($request->get('email'));
        $club->siteurl = trim($request->get('siteurl'));
        $club->save();

        $request->session()->flash('message', "Club '{$club->name}' is updated successfully!");

        return redirect('/admin/clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::findOrFail($id);

        $this->authorize('delete', $club);

        $name = $club->name;
        $club->delete();

        session()->flash('message', "Club '{$name}' is deleted successfully!");

        return redirect('/admin/clubs');
    }
}
