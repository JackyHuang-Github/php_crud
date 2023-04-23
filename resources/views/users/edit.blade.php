@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 修改資料</h2>
    <hr>
</div>

{{-- 傳遞 PUT 模式資訊給子頁面 _form --}}
@section('methodMode')
    @php 
        $_method = "PUT";
    @endphp
@show

<form name="_form" action="{{ route('users.update', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
    {{-- 設定 Action 為 PUT --}}
    @method("PUT")
    {{-- 設定防禦 CSRF 的攻擊 --}}
    @csrf
    @include('users._form') 
</form>
@endsection