@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 新增資料</h2>
    <hr>
</div>

{{-- 傳遞刪除模式資訊給子頁面 _form --}}
@section('methodMode')
    @php 
        $_method = "POST";
    @endphp
@show

<form name="" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('users._form') 
</form>
@endsection