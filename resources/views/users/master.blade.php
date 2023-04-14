<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>會員管理系統</title>
</head>
<body>
    <div class="container-fluid bg-info">
        <h1 align='center'>會員管理系統</h1>
        <div class="row">
            <div class="col text-center">
                <h5><a href="{{ url('users/create') }}">新增會員</a>&nbsp;&nbsp;<a href="#">刪除被選取資料</a></h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>