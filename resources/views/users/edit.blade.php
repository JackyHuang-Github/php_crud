@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 修改資料</h2>
    <hr>
</div>

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