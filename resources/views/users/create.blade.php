<!-- {!! Form::open(['action'=>'App\Http\Controllers\UserController@store', 'method'=>'post', 'files'=>true]) !!} -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{-- @csrf --}}
    {{-- 如果要傳參數到include視圖，可用第二參數作為陣列傳入 --}}

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card w-50 mx-auto" border=2>
                    @include('users.form', ['submitBtnText'=>'建立']) 
                </div>
            </div>
        </div>
    </div>
<!-- {!! Form::close() !!} -->