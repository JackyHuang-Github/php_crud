{{-- {!! Form::open(['action'=>'App\Http\Controllers\UserController@store', 'method'=>'post', 'files'=>true]) !!} --}}
{{-- {!! Form::close() !!} --}}
{{-- <form name="" action="App\Http\Controllers\UserController@store" method="post" class="comment-form" enctype="multipart/form-data">     --}}
{{-- <form name="" action="{{ route('users.store') }}" method="post" class="comment-form" enctype="multipart/form-data">     --}}

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mx-auto border-danger" style="width:500px;">
                @include('users._form') 
            </div>
        </div>
    </div>
</div>
{{-- 

