@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 新增資料</h2>
    <hr>
</div>
<form name="" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('users._form') 
</form>
@endsection