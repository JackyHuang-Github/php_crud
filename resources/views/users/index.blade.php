@extends('users.master')
@section('content')

<div class="row">
    <div class="col">
        <p>
            <table class="table table-hover text-left" border=2>
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
                        <th scope="col">
                            <th>備註</th>
                            <th>功能</th>
                            <th>功能2</th>
                        </th>
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
                        <td>
                            <td>{{ $user->comment }}</td>
                            <td><a href="{{ url('users/$user->uid') }}" class="btn btn-success btn-sm">修改</a></td>
                            <td><a href="{{ url('users/$user->uid') }}" class="btn btn-success btn-sm">刪除</a></td>
                            
                        </td>
                        <!-- <td><a href='php_crud_delete.php?id=" . $row["id"] . "'>刪除</a></td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </p>
    </div>
</div>
@endsection