@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 文章</title>
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
                            <li class="active">文章</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{ url('admin/post') }}"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> 刷新</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>文章&nbsp;
                            <a href="{{ url('admin/post/create') }}"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create a new post"></i></a>

                            <small>你的博客文章本页面提供了一个全面的概述. 点击这个按钮 <span class="zmdi zmdi-edit text-primary"></span> 编辑你的文章. 点击这个按钮 <span class="zmdi zmdi-search text-primary"></span> 查看内容.</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="posts" class="table table-condensed table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-order="desc">ID</th>
                                    <th data-column-id="title">标题</th>
                                    <th data-column-id="author">作者</th>
                                    <th data-column-id="published">状态</th>
                                    <th data-column-id="slug">别名</th>
                                    <th data-column-id="date" data-type="date" data-formatter="humandate">时间</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->getAuthor($post->user_id) }}</td>
                                        <td>{{ $post->is_draft == 1 ? '<span class="label label-primary">Draft</span>' : '<span class="label label-success">Published</span>' }}</td>
                                        <td>{{ $post->slug }}</td>
                                        @if($post->updated_at != $post->created_at)
                                            <td>{{ $post->updated_at->format('Y/m/d') . "<br/>" }} Last updated</td>
                                        @else
                                            <td>{{ $post->created_at->format('Y/m/d') . "<br/>" }} Published</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    @if(Session::get('_delete-post'))
        @include('backend.partials.notify', ['section' => '_delete-post'])
        {{ \Session::forget('_delete-post') }}
    @endif
    @if(Session::get('_update-post'))
        @include('backend.partials.notify', ['section' => '_update-post'])
        {{ \Session::forget('_update-post') }}
    @endif
    @include('backend.post.partials.datatable')
@stop
