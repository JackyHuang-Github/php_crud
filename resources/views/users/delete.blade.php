@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h4>會員管理系統 - 刪除資料</h4>
    <hr>
</div>

{{-- 傳遞 DELETE 模式資訊給子頁面 _form --}}
{{-- @section('methodMode') --}}
@section('php_variables')
    @php
        $_method = "DELETE";
        $is_delete = "N";
    @endphp
@show

<form action="{{ route('users.destroy', ['user' => $user, 'is_delete' => $is_delete]) }}" method="POST" enctype="multipart/form-data" name="delete_form">
    {{-- 設定 Action 為 DELETE --}}
    @method("DELETE")
    {{-- 設定防禦 CSRF 的攻擊 --}}
    @csrf
    @include('users._form') 
</form>
@endsection