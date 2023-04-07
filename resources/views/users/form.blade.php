{!! Form::label('id', '序號') !!}
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
{!! Form::text('comment', null) !!}<br>

@if (isset($user))
    {!! Form::hidden('id', $user->id) !!}
@endif