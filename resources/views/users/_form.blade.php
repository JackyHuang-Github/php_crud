            @section('methodMode')
                @parent
            @endsection

            {{-- for testing --}}
            {{-- {{ $_method }} --}}
    
            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="id" class="form-label">id</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="id" value={{ $user->id }} readonly>
                    @else
                        <input type="text" class="form-control" name="id" readonly>
                    @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="account" class="form-label">帳號</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="account" value={{ $user->account }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="text" class="form-control" name="account">
                    @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="password" class="form-label">密碼</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="password" value={{ $user->password }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="password" class="form-control" name="password">
                    @endif
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="name" class="form-label">姓名</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="name" value={{ $user->name }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="text" class="form-control" name="name">
                    @endif
                </div>
            </div>

            <div class="row form-group pt-1">
                <div class="col-2 px-3">
                    <label for="sex" class="form-label">性別</label>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        @if (isset($user) && !empty($user->id))
                                            @if ($_method == "DELETE")
                                                <input type="radio" class="form-check-input" name="sex" id="sex_m" value="男" {{ $user->sex == "男" ? 'checked' : ''}} readonly>
                                            @else
                                                <input type="radio" class="form-check-input" name="sex" id="sex_m" value="男" {{ $user->sex == "男" ? 'checked' : ''}}>
                                            @endif
                                        @else
                                            <input class="form-check-input" type="radio" name="sex" id="sex_m" value="男" checked>
                                        @endif
                                        <label class="form-check-label" {{ $_method == "DELETE" ? '' : 'for="sex_m"' }}>男</label>
                                    </div>
                                </div>                        
                                <div class="col-6">
                                    <div class="form-check">
                                        @if (isset($user) && !empty($user->id))
                                            @if ($_method == "DELETE")
                                                <input class="form-check-input" type="radio" name="sex" id="sex_f" value="女" {{ $user->sex == "女" ? 'checked' : ''}} readonly>
                                            @else
                                                <input class="form-check-input" type="radio" name="sex" id="sex_f" value="女" {{ $user->sex == "女" ? 'checked' : ''}}>
                                            @endif
                                        @else
                                            <input class="form-check-input" type="radio" name="sex" id="sex_f" value="女">
                                        @endif
                                        <label class="form-check-label" {{ $_method == "DELETE" ? '' : 'for="sex_f"' }}>女</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8"></div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-1">
                    <label for="year" class="form-label">生日</label>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-3">
                            @if (isset($user) && !empty($user->id))
                                <input type="numeric" class="form-control" name="year" value={{ $user->year }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                            @else
                                <input type="numeric" class="form-control" name="year">
                            @endif
                        </div>

                        <div class="col-4">
                            <div class="row px-3">
                                <div class="col-3 g-1">
                                    <label for="month" class="form-label">/</label>
                                </div>
                                <div class="col-9 px-0">
                                    @if (isset($user) && !empty($user->id))
                                        <input type="numeric" class="form-control" name="month" value={{ $user->month }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                                    @else
                                        <input type="numeric" class="form-control" name="month">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row px-3">
                                <div class="col-3 g-1">
                                    <label for="day" class="form-label">/</label>
                                </div>
                                <div class="col-9 px-0">
                                    @if (isset($user) && !empty($user->id))
                                        <input type="numeric" class="form-control" name="day" value={{ $user->day }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                                    @else
                                        <input type="numeric" class="form-control" name="day">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="telephone" class="form-label">電話</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="telephone" value={{ $user->telephone }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="text" class="form-control" name="telephone">
                    @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="cellphone" class="form-label">手機</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="cellphone" value={{ $user->cellphone }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="text" class="form-control" name="cellphone">
                    @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="address" class="form-label">地址</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="text" class="form-control" name="address" value={{ $user->address }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="text" class="form-control" name="address">
                    @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-2 g-2">
                    <label for="email" class="form-label">電子郵件</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="email" class="form-control" name="email" value={{ $user->email }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="email" class="form-control" name="email">
                    @endif
                </div>                
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="url" class="form-label">網址</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="url" class="form-control" name="url" value={{ $user->url }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="url" class="form-control" name="url">
                    @endif
                </div>                
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="comment" class="form-label">備註</label>
                </div>
                <div class="col-10">
                    @if (isset($user) && !empty($user->id))
                        <input type="textarea" rows="4" cols="50" class="form-control" name="comment" value={{ $user->comment }} {{ $_method == "DELETE" ? 'readonly' : '' }}>
                    @else
                        <input type="textarea" rows="4" cols="50" class="form-control" name="comment">
                    @endif
                </div>                
            </div>

            <div class="row card text-center">
                <div class="col">
                    @if ($_method == "POST")
                        <button type="submit" class="btn btn-primary">新增資料</button>
                    @else
                        @if ($_method == "PUT")
                            <button type="submit" class="btn btn-primary">修改資料</button>
                        @else
                            @if ($_method == "DELETE")
                                <button type="submit" class="btn btn-primary">刪除資料</button>
                            @endif
                        @endif
                    @endif
                    <a href="{{ url('users') }}" class="btn btn-primary">回首頁</a>
                </div>
            <div>
