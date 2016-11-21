<aside id="sidebar" class="sidebar c-overflow">
    <div class="profile-menu">
        <a href="">
            <div class="profile-pic">
                <img src="//www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?d=identicon">
            </div>
            <div class="profile-info">
                {{ Auth::user()->display_name }}
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>
        <ul class="main-menu profile-ul">
            <li @if (Request::is('admin/profile/*')) class="active" @endif><a href="{{ route('admin.profile.index') }}"><i class="zmdi zmdi-account"></i> 个人信息</a></li>
            <li><a href="{{ url('auth/logout') }}" name="logout"><i class="zmdi zmdi-power"></i> 登出</a></li>
        </ul>
    </div>
    <ul class="main-menu main-ul">
        <li @if (Request::is('admin')) class="active" @endif><a href="{{ url('admin') }}"><i class="zmdi zmdi-home"></i> 首页</a></li>
        <li class="sub-menu @if (Request::is('admin/post*')) active toggled @endif">
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-bookmark"></i> 文章</a>
            <ul>
                <li><a href="{{ url('admin/post') }}" @if (Request::is('admin/post')) class="active" @endif>全部文章 <span class="label label-default label-totals">{{ App\Models\Post::count() }}</span></a></li>
                <li><a href="{{ url('admin/post/create') }}" @if (Request::is('admin/post/create')) class="active" @endif>新增文章</a></li>
            </ul>
        </li>
        <li class="sub-menu @if (Request::is('admin/tag*')) active toggled @endif">
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-labels"></i> 标签</a>
            <ul>
                <li><a href="{{ url('admin/tag') }}" @if (Request::is('admin/tag')) class="active" @endif>全部标签 <span class="label label-default label-totals">{{ App\Models\Tag::count() }}</span></a></li>
                <li><a href="{{ url('admin/tag/create') }}" @if (Request::is('admin/tag/create')) class="active" @endif>新增标签</a></li>
            </ul>
        </li>
        <li @if (Request::is('admin/upload*')) class="active" @endif><a href="{{ url('admin/upload') }}"><i class="zmdi zmdi-collection-folder-image"></i> 媒体</a></li>
        @if(\App\Models\User::isAdmin(Auth::user()->role))
            <li class="sub-menu @if (Request::is('admin/user*')) active toggled @endif">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-accounts-alt"></i> 用户</a>
                <ul>
                    <li><a href="{{ url('admin/user') }}" @if (Request::is('admin/user')) class="active" @endif>全部用户 <span class="label label-default label-totals">{{ App\Models\User::count() }}</span></a></li>
                    <li><a href="{{ url('admin/user/create') }}" @if (Request::is('admin/user/create')) class="active" @endif>新增用户</a></li>
                </ul>
            </li>
            <li @if (Request::is('admin/tools*')) class="active" @endif><a href="{{ url('admin/tools') }}"><i class="zmdi zmdi-wrench"></i> 工具</a></li>
            <li @if (Request::is('admin/settings*')) class="active" @endif><a href="{{ url('admin/settings') }}"><i class="zmdi zmdi-settings"></i> 设置</a></li>
        @endif
        <li @if (Request::is('admin/help')) class="active" @endif><a href="{{ url('admin/help') }}"><i class="zmdi zmdi-help"></i> 帮助</a></li>
    </ul>
</aside>
