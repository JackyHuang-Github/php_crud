{!! Form::model($user ,['url'=>'users/'.$user->id, 'method'=>'patch', 'files'=>true]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {{-- 如果要傳參數到include視圖，可用第二參數作為陣列傳入 --}}
    @include('users.form',['submitBtnText'=>'修改'])
{!! Form::close() !!}


// https://ithelp.ithome.com.tw/articles/10218594
// <form action="{{ route('users.update', [ 'user' => $user]) }}" method="POST">
//     @method('PUT')
//     @csrf
//     <label>內容：
//         <textarea name="content">{{ $user->content }}</textarea>
//     </label><br>
//     <input type="submit" value="送出文章">
// </form>

// Laravel Collective 官網有關生日的 Code
// class User extends Model
// {
//     use FormAccessible;

//     /**
//      * Get the user's date of birth.
//      *
//      * @param  string  $value
//      * @return string
//      */
//     public function getDateOfBirthAttribute($value)
//     {
//         return Carbon::parse($value)->format('m/d/Y');
//     }

//     /**
//      * Get the user's date of birth for forms.
//      *
//      * @param  string  $value
//      * @return string
//      */
//     public function formDateOfBirthAttribute($value)
//     {
//         return Carbon::parse($value)->format('Y-m-d');
//     }
// }