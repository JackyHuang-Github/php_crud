<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>會員管理系統</title>

    <style>
        table tr th {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table tr td {
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-secondary">
        <div class="row">
            <div class="col">
                <form align=center action="{{ url('users/deleteSelected') }}" name='formMaster' method='POST'>
                    {{-- 設定防禦 CSRF 的攻擊 --}}
                    @csrf
                    <div class="row mt-1">
                        <div class="col">
                            <h3 align='center'><span class="text-light">會 員 管 理 系 統</span></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ms-auto">
                            <a href="{{ url('users/create') }}" class="btn btn-primary btn-sm">新增會員</a>
                            <a href='#' class="btn btn-primary btn-sm" onclick="del_selected();">刪除被選取資料</a>
                        </div>
                        <div class="col-10">
                            <ul class="pagination justify-content-end m-0 p-0">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @yield('content')
                        </div>
                    </div>
                </form>
            </div>>
        </div>
    </div>
    <script>
        function del_selected() {
            if(confirm('是否確定要刪除這些被選取的資料？ 刪除後將無法恢復！')) {
                formMaster.submit(); 
            }
            return false;
        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>