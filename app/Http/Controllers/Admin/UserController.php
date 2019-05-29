<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Club;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function make_club_admin(Request $request, $id) {
        $this->authorize('make_club_admin', User::class);
        
        $user = User::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'club_id'=> 'required'
            ]);

            $user->role = "club_admin";
            $user->club_id = $request->get('club_id');
            $user->save();

            session()->flash('message', "User '{$user->name}' is updated successfully!");

            return redirect('admin/users');
        }

        $clubs = Club::all();

        return view('admin.users.make_club_admin', compact('user', 'clubs'));
    }
}
