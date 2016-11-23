@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 媒体</title>
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
                            <li class="active">媒体</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{ url('admin/upload') }}"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> 刷新</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h2>媒体库
                            <small>
                                所有你所上传的文件按字母顺序列出媒体库中。双击一个文件夹名称，查看其内容。
                            </small>
                        </h2>
                    </div>

                    <media-manager></media-manager>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    <script>
        new Vue({
            el: '#main',
            created: function () {
                window.eventHub.$on('media-manager-notification', function (message, type, time) {
                    $.growl({
                        message: message
                    }, {
                        type: 'inverse',
                        allow_dismiss: false,
                        label: 'Cancel',
                        className: 'btn-xs btn-inverse',
                        placement: {
                            from: 'top',
                            align: 'right'
                        },
                        delay: time,
                        animate: {
                            enter: 'animated fadeInRight',
                            exit: 'animated fadeOutRight'
                        },
                        offset: {
                            x: 20,
                            y: 85
                        }
                    });
                });
            }
        });
    </script>
@stop
