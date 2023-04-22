@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 修改資料</h2>
    <hr>
</div>

{{-- 傳遞刪除模式資訊給子頁面 _form --}}
@section('methodMode')
    @php 
        $_method = "PUT";
    @endphp
@show

<form name="" action="{{ route('users.update', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    @include('users._form') 
</form>
@endsection