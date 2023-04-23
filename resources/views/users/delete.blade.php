@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 刪除資料</h2>
    <hr>
</div>

{{-- 傳遞刪除模式資訊給子頁面 _form --}}
@section('methodMode')
    @php
        $_method = "DELETE";
    @endphp
@show

<form name="_form" action="{{ route('users.destroy', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
    {{-- 設定 Action 為 DELETE --}}
    @method("DELETE")
    {{-- 設定防禦 CSRF 的攻擊 --}}
    @csrf
    @include('users._form') 
</form>

@endsection