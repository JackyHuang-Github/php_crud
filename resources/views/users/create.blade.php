{!! Form::open(['action'=>'App\Http\Controllers\UserController@store', 'method'=>'post', 'files'=>true]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{-- @csrf --}}
    {{-- 如果要傳參數到include視圖，可用第二參數作為陣列傳入 --}}
    @include('users.form', ['submitBtnText'=>'建立']) 
{!! Form::close() !!}