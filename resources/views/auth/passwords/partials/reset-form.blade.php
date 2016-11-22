<form role="form" id="forgot-password" method="POST" action="{{ route('auth.password.reset.store') }}">
    {!! csrf_field() !!}

    @if(session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group fg-line">
        <input type="email" class="form-control"
               name="email" value="{{ $email or old('email') }}" placeholder="邮箱">
    </div>

    <div class="form-group fg-line">
        <input type="password" name="password" class="form-control"
               placeholder="新密码">
    </div>

    <div class="form-group fg-line">
        <input type="password" name="password_confirmation" class="form-control"
               placeholder="确认密码">
    </div>

    <button type="submit" name="submit" class="btn btn-primary m-t-10">重置</button>
</form>
