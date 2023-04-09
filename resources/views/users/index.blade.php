@extends('users.master')
@section('content')

<div class="row">
    <div class="col">
        <p>
            <table class="table text-left table-striped" border=2>
                <thead>
                    <tr class="table-primary">
                        <th scope="col">序號</th>
                        <th scope="col">帳號</th>
                        <th scope="col">密碼</th>
                        <th scope="col">姓名</th>
                        <th scope="col">性別</th>
                        <th scope="col">生日</th>
                        <th scope="col">電話</th>
                        <th scope="col">手機</th>
                        <th scope="col">住址</th>
                        <th scope="col">電子郵件</th>
                        <th scope="col">網址</th>
                        <th scope="col">備註</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="table-light">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->account }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->sex }}</td>
                        <td>{{ $user->year }}/{{ $user->month }}/{{ $user->day }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>{{ $user->cellphone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->url }}</td>
                        <td>{{ $user->comment }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>
@endsection