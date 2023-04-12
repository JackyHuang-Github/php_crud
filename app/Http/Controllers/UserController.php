<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;

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
        echo 'create'; 
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'account' => 'bail | required | string | max:10',
        //     'password' => 'required | string | max:10',
        //     'name' => 'required | string | max:10',
        //     'sex' => 'required | string | max:2',
        //     'year' => 'required | integer',
        //     'month' => 'required | integer',
        //     'day' => 'required | integer',
        //     'telephone' => 'required | string | max:20',
        //     'cellphone' => 'required | string | max:20',
        //     'address' => 'required | string | max:50',
        //     'email' => 'required | string | max:50',
        //     'url' => 'required | string | max:50',
        //     'comment' => 'required | string'
        // ]);

        // if($validator->fails()) {
        //     return redirect('users')->withErrors($validator)->withInput();
        // }

        $user = new User;
        $user->account = $request->account;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->year = $request->year;
        $user->year = $request->month;
        $user->year = $request->day;
        $user->telephone = $request->telephone;
        $user->cellphone = $request->cellphone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->url = $request->url;
        $user->comment = $request->comment;
        $user->save();

        // $input = [
        //     'account' => $request->input('account'),
        //     'password' => $request->input('password'),
        //     'name' => $request->input('name'),
        //     'sex' => $request->input('sex'),
        //     'year' => $request->input('year'),
        //     'month' => $request->input('month'),
        //     'day' => $request->input('day'),
        //     'telephone' => $request->input('telephone'),
        //     'cellphone' => $request->input('cellphone'),
        //     'address' => $request->input('address'),
        //     'email' => $request->input('email'),
        //     'url' => $request->input('url'),
        //     'comment' => $request->input('comment'),
        // ];
        // User::create($input);

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
