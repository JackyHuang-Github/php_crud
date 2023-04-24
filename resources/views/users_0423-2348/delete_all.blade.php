@foreach ($dels as $del)
    {{ $del }}<br>
    console.log($del)
@endforeach

<form name="delete_all" action="{{ route('users.destroy', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
    {{-- 設定 Action 為 DELETE --}}
    @method("DELETE")
    {{-- 設定防禦 CSRF 的攻擊 --}}
    @csrf
</form>

