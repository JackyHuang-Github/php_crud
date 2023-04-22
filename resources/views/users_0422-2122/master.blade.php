<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>會員管理系統</title>

    <style>
        table {
            text-align: center;
            /* text-align: left; */
            border: 2px solid yellow;
        }

        tr th {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        tr td {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>