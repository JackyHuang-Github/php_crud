@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 刪除資料</h2>
    <hr>
</div>

@section('methodMode')
    @php 
    $_method = "DELETE";
    @endphp
@show

@php
    route('users.destroy', ['user' => $user])
@endphp

{{-- <form name="" action="{{ route('users.destroy', ['user' => $user]) }}" method="POST" enctype="multipart/form-data"> --}}
<form name="" action="" method="POST" enctype="multipart/form-data">
    @method('DELETE')
    @csrf
    @include('users._form') 
</form>

@endsection