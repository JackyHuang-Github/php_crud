<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->account = $user->input('account');
        $user->password = $user->input('password');
        $user->name = $user->input('name');
        $user->sex = $user->input('sex');
        $user->year = $user->input('year');
        $user->year = $user->input('month');
        $user->year = $user->input('day');
        $user->telephone = $user->input('telephone');
        $user->cellphone = $user->input('cellphone');
        $user->address = $user->input('address');
        $user->email = $user->input('email');
        $user->url = $user->input('url');
        $user->comment = $user->input('comment');
        $user->save();
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->account = $request->input('account');
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->sex = $request->input('sex');
        $user->year = $request->input('year');
        $user->year = $request->input('month');
        $user->year = $request->input('day');
        $user->telephone = $request->input('telephone');
        $user->cellphone = $request->input('cellphone');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        $user->url = $request->input('url');
        $user->comment = $request->input('comment');
        $user->save();
        return redirect(route('users.show', ['user' => $user]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
