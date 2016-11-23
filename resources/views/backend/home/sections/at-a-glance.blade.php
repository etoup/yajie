<div class="card">
    <div class="card-header">
        <h2>显示
            <small>站点快照内容:</small>
        </h2>
        <br>
        <ul class="getting-started">
            <li>
                <i class="zmdi zmdi-collection-bookmark"></i> <a href="{{ url('admin/post') }}">{{ count($data['posts']) }}{{ str_plural(' 篇文章', count($data['posts'])) }}</a>
            </li>
            <li>
                <i class="zmdi zmdi-labels"></i> <a href="{{ url('admin/tag') }}">{{ count($data['tags']) }}{{ str_plural(' 个标签', count($data['tags'])) }}</a>
            </li>
            <li>
                <i class="zmdi zmdi-accounts-alt"></i> <a href="{{ url('admin/user') }}">{{ count($data['users']) }}{{ str_plural(' 位用户', count($data['users'])) }}</a>
            </li>
            <li>
                @if($data['status'] === \App\Helpers::MAINTENANCE_MODE_DISABLED)
                    <i class="zmdi zmdi-globe-alt"></i> <a href="{{ url('admin/tools') }}"><span class="label label-success">状态: {{ strtoupper('正常') }}</span></a>
                @else
                    <i class="zmdi zmdi-globe-alt"></i> <a href="{{ url('admin/tools') }}"><span class="label label-warning">状态: {{ strtoupper('维护模式') }}</span></a>
                @endif
            </li>
            <li>
                @if(isset($data['disqus']) && strlen($data['disqus']))
                    <i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}"><span class="label label-success">Disqus: {{ strtoupper('启用') }}</span></a>
                @else
                    <i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}"><span class="label label-danger">Disqus: {{ strtoupper('停用') }}</span></a>
                @endif
            </li>
            <li>
                @if(isset($data['analytics']) && strlen($data['analytics']))
                    <i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}"><span class="label label-success">Google Analytics: {{ strtoupper('启用') }}</span></a>
                @else
                    <i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}"><span class="label label-danger">Google Analytics: {{ strtoupper('停用') }}</span></a>
                @endif
            </li>
        </ul>
    </div>
</div>
