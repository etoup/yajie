<form role="form" id="login" method="POST" action="{{ route('auth.login.store') }}">
    {!! csrf_field() !!}
    <div class="form-group fg-line">
        <input type="email" class="form-control"
               name="email" value="{{ old('email') }}" placeholder="邮箱">
    </div>
    <div class="form-group fg-line">
        <input type="password" name="password" class="form-control"
               placeholder="密码">
    </div>

    <div class="form-group fg-line">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember">
                <i class="input-helper"></i>
                记住我
            </label>
        </div>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary m-t-10">登录</button><a href="{{ route('auth.password.forgot') }}" class="btn btn-link m-t-10">忘记密码</a>
</form>
