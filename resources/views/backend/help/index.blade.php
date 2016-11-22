@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 帮助</title>
@stop

@section('content')
    <section id="main">
        @include('backend.partials.sidebar-navigation')
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>帮助</h2>
                    <ul class="actions">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{{ url('admin/help') }}"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> 刷新</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2>帮助提示
                            <small>帮助用于以下提示:</small>
                        </h2>
                    </div>
                    <div class="card-body card-padding">
                        @include('backend.help.partials.overview')
                        <hr>
                        @include('backend.help.partials.topics')
                        <hr>
                        @include('backend.help.partials.items')
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    @include('backend.shared.components.smooth-scroll')
@endsection
