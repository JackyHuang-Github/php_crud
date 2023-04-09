<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <div class="card-body">
        <div class="card-header text-center">
            會員管理系統 - 新增資料
        </div>

        <form>
            <div class="row form-group">
                <div class="col-2">
                    <label for="id" class="form-label">id</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" id="id" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2">
                    <label for="account" class="form-label">帳號</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" id="account">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2">
                    <label for="password" class="form-label">密碼</label>
                </div>
                <div class="col-10">
                    <input type="password" class="form-control" id="password">
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-2">
                    <label for="name" class="form-label">姓名</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" id="name">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2">
                    <label for="sex" class="form-label">性別</label>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="男" checked>
                                        <label class="form-check-label" for="男">男</label>
                                    </div>
                                </div>                        
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="女">
                                        <label class="form-check-label" for="女">女</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-9"></div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="row form-group">
                    <div class="col-2">
                        <label for="email" class="form-label">電子郵件</label>
                    </div>
                    <div class="col-10">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>                
                </div>
            </div>

            <hr />
            <button type="submit" class="btn btn-primary">傳送</button>
        </form>
    </div>

    {{-- {!! Form::label('id', '序號') !!}
    {!! Form::text('id', null) !!}<br>
    {!! Form::label('account', '帳號') !!}
    {!! Form::text('account', null) !!}<br>
    {!! Form::label('password', '密碼') !!}
    {!! Form::text('password', null) !!}<br>
    {!! Form::label('name', '姓名') !!}
    {!! Form::text('name', null) !!}<br>
    {!! Form::label('sex', '性別') !!}
    {!! Form::text('sex', null) !!}<br>
    {!! Form::label('year', '年') !!}
    {!! Form::text('year', null) !!}<br>
    {!! Form::label('month', '月') !!}
    {!! Form::text('month', null) !!}<br>
    {!! Form::label('day', '日') !!}
    {!! Form::text('day', null) !!}<br>
    {!! Form::label('telephone', '電話') !!}
    {!! Form::text('telephone', null) !!}<br>
    {!! Form::label('cellphone', '手機') !!}
    {!! Form::text('cellphone', null) !!}<br>
    {!! Form::label('address', '住址') !!}
    {!! Form::text('address', null) !!}<br>
    {!! Form::label('email', '電子郵件') !!}
    {!! Form::text('email', null) !!}<br>
    {!! Form::label('url', '網址') !!}
    {!! Form::text('url', null) !!}<br>
    {!! Form::label('comment', '備註') !!}
    {!! Form::text('comment', null) !!}<br> --}}

    @if (isset($user))
    {!! Form::hidden('id', $user->id) !!}
    @endif    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
