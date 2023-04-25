<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
use PHPUnit\TextUI\Configuration\Php;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 定義每頁 10 筆資料
        define("RECORDS_PERPAGE", 10);

        // $users = User::all();
        $users = User::paginate(RECORDS_PERPAGE);
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
        $user->month = $request->month;
        $user->day = $request->day;
        $user->telephone = $request->telephone;
        $user->cellphone = $request->cellphone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->url = $request->url;
        $user->comment = $request->comment;
        $user->save();

        // 這段 code 只會產生 account ?????
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
        echo 'run show()';

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
        $user->account = $request->account;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->year = $request->year;
        $user->month = $request->month;
        $user->day = $request->day;
        $user->telephone = $request->telephone;
        $user->cellphone = $request->cellphone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->url = $request->url;
        $user->comment = $request->comment;
        $user->save();

        return redirect(route('users.index'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('users.delete', compact('user'));
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->input('dels');
        User::wherein('id', $ids)->delete();
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));
    }
}
