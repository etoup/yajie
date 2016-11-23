@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 用户</title>
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
                            <li class="active">用户</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{ url('admin/user') }}"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> 刷新</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @include('shared.errors')
                        @include('shared.success')
                        <h2>用户&nbsp;
                            <a href="{{ url('admin/user/create') }}"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create a new user"></i></a>

                            <small>此页提供了所有当前用户的全面概述. 点击图标 <span class="zmdi zmdi-edit text-primary"></span> 来更新和删除用户信息.</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="users" class="table table-condensed table-vmiddle">
                            <thead>
                            <tr>
                                <th data-column-id="id" data-type="numeric" data-order="asc">ID</th>
                                <th data-column-id="display_name">姓名</th>
                                <th data-column-id="email">邮箱</th>
                                <th data-column-id="role">角色</th>
                                <th data-column-id="posts">文章数</th>
                                <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->display_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->isAdmin($user->role) ? '<span class="label label-primary">管理员</span>' : '<span class="label label-default">用户</span>' }}</td>
                                    <td>{{ $user->postCount($user->id) }}</td>
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
    @include('backend.user.partials.datatable')

    @if(Session::get('_new-user'))
        @include('backend.partials.notify', ['section' => '_new-user'])
        {{ \Session::forget('_new-user') }}
    @endif

    @if(Session::get('_delete-user'))
        @include('backend.partials.notify', ['section' => '_delete-user'])
        {{ \Session::forget('_delete-user') }}
    @endif
@stop
