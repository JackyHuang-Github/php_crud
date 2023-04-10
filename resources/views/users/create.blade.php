{!! Form::open(['action'=>'App\Http\Controllers\UserController@store', 'method'=>'post', 'files'=>true]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{-- @csrf --}}
    {{-- 如果要傳參數到include視圖，可用第二參數作為陣列傳入 --}}

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3 mx-auto border-danger" style="width:500px;">
                    @include('users._form') 
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}