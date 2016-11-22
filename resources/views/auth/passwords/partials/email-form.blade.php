<form role="form" id="forgot-password" method="POST" action="{{ route('auth.password.forgot.store') }}">
    {!! csrf_field() !!}

    @if(session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="form-group fg-line">
        <input type="email" class="form-control"
               name="email" value="{{ old('email') }}" placeholder="邮箱">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary m-t-10">发送邮件</button><a href="{{ url('admin') }}" class="btn btn-link m-t-10">登录</a>
</form>
