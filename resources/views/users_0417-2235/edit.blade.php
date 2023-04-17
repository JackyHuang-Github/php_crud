@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 修改資料</h2>
    <hr>
</div>
<form name="" action="{{ route('users.update', [ 'user' => $user]) }}" method="GET" enctype="multipart/form-data">
    @csrf
    @include('users._form') 
</form>
@endsection