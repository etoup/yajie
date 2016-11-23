@extends('backend.layout')

@section('title')
    <title>{{ Settings::blogTitle() }} | 搜索</title>
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
                            <li class="active">搜索</li>
                        </ol>
                        <h2><i class="zmdi zmdi-search"></i> 搜索结果于 <em>{{ request('search') }}</em></h2>
                        <br>
                        <div class="table-responsive">
                            @include('backend.search.partials.results')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
