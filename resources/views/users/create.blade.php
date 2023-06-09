@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h4>會員管理系統 - 新增資料</h4>
    <hr>
</div>

{{-- 傳遞 POST 模式資訊給子頁面 _form --}}
@section('methodMode')
    @php
        $_method = "POST";
    @endphp
@show

<form name="create_form" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    {{-- 設定防禦 CSRF 的攻擊 --}}
    @csrf
    @include('users._form') 
</form>
@endsection