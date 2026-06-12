<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UserRole;


class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $roles = Role::get();
        $userRoles = UserRole::with('user', 'role')->orderByDesc('id')->get();
        $title = 'Role Management';
        return view('user-role.index', compact('userRoles', 'users', 'roles', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        $roles = Role::get();
        $title = "Create New Role";
        return view('user-role.create', compact('title', 'users', 'roles',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_name' => 'required',
            'role_name' => 'required',

        ]);


        //
        UserRole::create($request->all());
        Alert::success('Success!', 'Your Role has Been Created!');
        // toast('Your Role Has Been Created!', 'success');

        return redirect()->to('user-role');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $title = 'Edit Role';
        $edit = UserRole::find($id); //kalo gabisa blank
        // $edit = User::findOrFail($id); //kalo gabisa 404
        return view('user-role.edit', compact('title', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active
        ];

        UserRole::find($id)->update($data);
        return redirect()->to('user-role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        UserRole::find($id)->delete();
        return redirect()->to('user-role');
    }
}
