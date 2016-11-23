<div class="card">
    <div class="card-header">
        @if($data['canvasVersion'] !== $data['latestRelease'])
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: white">&times;</a>
                <a href="{{ url('http://github.com/austintoddj/canvas/releases/tag/') . $data['latestRelease'] }}" target="_blank" style="color: white"><strong>Canvas {{ $data['latestRelease'] }}</strong></a> is available! <a href="http://github.com/austintoddj/canvas/blob/master/UPGRADE.md" target="_blank" style="color: white"><strong>立即更新.</strong></a>
            </div>
        @endif

        <h2>欢迎回到控制台!
            <small>这里列出一些有用的链接，让我们开始吧！
            </small>
        </h2>
    </div>
    <div class="card-body card-padding">
        <div class="row">
            <div class="col-sm-4">
                <h5>开始</h5>
                <br>
                <a href="https://github.com/austintoddj/canvas#advanced-options" target="_blank" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-invert-colors"></i> 创建主题</a>
                <br>
                <br>
                <a href="{{ url('admin/profile') }}" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-account"></i> 更新个人资料</a>
                <br>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>下一步</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-comment-edit"></i> <a href="{{ url('admin/post/create') }}">写你的第一篇博客文章</a></li>
                    <li><i class="zmdi zmdi-plus-circle"></i> <a href="{{ url('admin/tag/create') }}">创建一个新的标签</a></li>
                    <li><i class="zmdi zmdi-view-web"></i> <a href="{{ url('/') }}" target="_blank">查看您的网站</a></li>
                </ul>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>更多</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-disqus"></i> <a href="{{ url('admin/settings') }}">Disqus Integration</a></li>
                    <li><i class="zmdi zmdi-trending-up"></i> <a href="{{ url('admin/settings') }}">Google Analytics Setup</a></li>
                    <li><i class="zmdi zmdi-wrench"></i> <a href="{{ url('admin/tools') }}">高级工具</a></li></a></li>
                </ul>
                <br>
            </div>
        </div>
    </div>
</div>