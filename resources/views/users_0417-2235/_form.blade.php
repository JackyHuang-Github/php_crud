            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="id" class="form-label">id</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="id" disabled>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="account" class="form-label">帳號</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="account">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="password" class="form-label">密碼</label>
                </div>
                <div class="col-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="name" class="form-label">姓名</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="name">
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
                                        <input class="form-check-input" type="radio" name="sex" value="男" checked>
                                        <label class="form-check-label" for="男">男</label>
                                    </div>
                                </div>                        
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="女">
                                        <label class="form-check-label" for="女">女</label>
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
                            <div><input type="numeric" class="form-control" name="year"></div>
                        </div>

                        <div class="col-4">
                            <div class="row px-3">
                                <div class="col-3 g-1">
                                    <label for="month" class="form-label">/</label>
                                </div>
                                <div class="col-9 px-0">
                                    <input type="numeric" class="form-control" name="month">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row px-3">
                                <div class="col-3 g-1">
                                    <label for="day" class="form-label">/</label>
                                </div>
                                <div class="col-9 px-0">
                                    <input type="numeric" class="form-control" name="day">
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
                    <input type="text" class="form-control" name="telephone">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="cellphone" class="form-label">手機</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="cellphone">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="address" class="form-label">地址</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" name="address">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-2 px-2 g-2">
                    <label for="email" class="form-label">電子郵件</label>
                </div>
                <div class="col-10">
                    <input type="email" class="form-control" name="email">
                </div>                
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="url" class="form-label">網址</label>
                </div>
                <div class="col-10">
                    <input type="url" class="form-control" name="url">
                </div>                
            </div>

            <div class="row form-group">
                <div class="col-2 px-3 g-2">
                    <label for="comment" class="form-label">備註</label>
                </div>
                <div class="col-10">
                    <input type="textarea" rows="4" cols="50" class="form-control" name="comment">
                </div>                
            </div>

            <!-- <hr /> -->

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">傳送</button>
                </div>
            </div>
