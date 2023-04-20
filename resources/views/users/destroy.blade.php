@extends('users._editbase')
@section('content')
<div class="card-header text-center">
    <h2>會員管理系統 - 刪除資料</h2>
    <hr>
</div>
{{-- <form name="" action="{{ route('users.destroy') }}" method="POST" enctype="multipart/form-data"> --}}
<form name="" action="" method="POST" enctype="multipart/form-data">
    @method('DELETE')
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    @include('users._form') 
</form>
@endsection