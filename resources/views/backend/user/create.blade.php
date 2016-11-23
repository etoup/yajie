@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 新增用户</title>
@stop

@section('content')
    <section id="main">
        @include('backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('admin') }}">控制台</a></li>
                            <li><a href="{{ url('admin/user') }}">用户</a></li>
                            <li class="active">新增用户</li>
                        </ol>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>新增一个用户</h2>
                    </div>
                    <div class="card-body card-padding">
                        <form class="keyboard-save" role="form" method="POST" id="createUser" action="{{ url('admin/user') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('backend.user.partials.form.create')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 保存</button>
                                &nbsp;
                                <a href="{{ url('admin/user') }}"><button type="button" class="btn btn-link">取消</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    {!! JsValidator::formRequest('App\Http\Requests\UserCreateRequest', '#createUser') !!}
    @include('backend.shared.components.show-password', ['inputs' => 'input[name="password"]'])
@stop