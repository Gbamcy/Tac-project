<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()->paginate('10');
        return view('backend.admin.users',compact('users'));
    }
    public function edit ($id)
    {
        $users = User::findOrFail($id);
        return view('backend.admin.users.edit',compact('users'));
    }
    public function update (Request $request, $id)
    {
        $users = User::findOrfail($id);
        $users ->name = $request ->get('name');
        $users ->email = $request ->get('email');
        return redirect()->route('backend.admin.users.update')->with('status','updated successfully.!');
    }
    public function destroy ($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('admin.users.destroy')->with('status','user deleted successfully');
    }


}
