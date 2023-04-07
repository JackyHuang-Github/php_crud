<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員管理系統</title>
    <style>
        table, td {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1 align='center'>會員管理系統</h1>
    @yield('content')
    {{-- <p>
    <table align=center border=1>
        <tr style="background-color:rgb(240, 240, 200)">
            <th>序號</th>
            <th>帳號</th>
            <th>密碼</th>
            <th>姓名</th>
            <th>性別</th>
            <th>生日</th>
            <th>電話</th>
            <th>手機</th>
            <th>住址</th>
            <th>電子郵件</th>
            <th>網址</th>
            <th>備註</th>
        </tr>
        @foreach($users as $user)
        <tr align=center>
            <td>{{ $user->id }}</td>
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
    </table>
    </p> --}}
</body>
</html>