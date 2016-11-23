@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 标签</title>
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
                            <li class="active">标签</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{ url('admin/tag') }}"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> 刷新</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>标签&nbsp;
                            <a href="{{ url('admin/tag/create') }}"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create a new tag"></i></a>
                            <small>本页提供了所有您的博客标签的全面概述. 点击在每个标签旁边的图标 <span class="zmdi zmdi-edit text-primary"></span> 来更新它的内容.</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="tags" class="table table-condensed table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-order="desc">Id</th>
                                    <th data-column-id="title">标题</th>
                                    <th data-column-id="subtitle">副标题</th>
                                    <th data-column-id="layout">布局</th>
                                    <th data-column-id="direction">状态</th>
                                    <th data-column-id="created" data-type="date">创建</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->title }}</td>
                                        <td class="hidden-sm">{{ str_limit($tag->subtitle, config('blog.backend_trim_width')) }}</td>
                                        <td class="hidden-md">{{ $tag->layout }}</td>
                                        <td class="hidden-sm">
                                            @if ($tag->reverse_direction)
                                                撤销
                                            @else
                                                正常
                                            @endif
                                        </td>
                                        <td>{{ $tag->created_at->format('M d, Y') }}</td>
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
    @include('backend.tag.partials.datatable')

    @if(Session::get('_new-tag'))
        @include('backend.partials.notify', ['section' => '_new-tag'])
        {{ \Session::forget('_new-tag') }}
    @endif

    @if(Session::get('_delete-tag'))
        @include('backend.partials.notify', ['section' => '_delete-tag'])
        {{ \Session::forget('_delete-tag') }}
    @endif
@stop
