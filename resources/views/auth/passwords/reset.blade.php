@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 重置密码</title>
@stop

@section('login')
    <div class="contain">
        <section id="main">
            <section id="content">
                <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                    <div class="card">
                        <div class="card-body card-padding" id="login-ch">
                            <p class="f-20 f-300 text-center">重置密码</p>
                            <p class="text-muted text-center">填写新密码</p>
                            @include('auth.passwords.partials.reset-form')
                            <br>
                        </div>
                    </div>
                    <p class="text-center"><a href="/"><i class="zmdi zmdi-long-arrow-return"></i> 返还首页</a>
                    </p>
                </div>
            </section>
        </section>
    </div>
@endsection

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#login') !!}
    @include('backend.shared.components.show-password', ['inputs' => 'input[name="password"]'])
@stop
