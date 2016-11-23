<div class="card">
    <div class="card-header">
        <h2>维护模式
            <small>
                   维护模式一旦开启，所有的公共地址显示一个503页面。作为管理员，您将有进入系统前端和控制台。一旦你准备好了，通过禁用维护模式，使网站再次激活。
            </small>
        </h2>
    </div>
    <div class="card-body card-padding">
        @if($data['status'] === \App\Helpers::MAINTENANCE_MODE_DISABLED)
            <form class="form-inline" action="{{ url('admin/tools/enable_maintenance_mode') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-primary btn-icon-text" id="maintenance_mode">
                    <i class="zmdi zmdi-alert-octagon"></i> 开启维护模式
                </button>
            </form>
        @else
            <form class="form-inline" action="{{ url('admin/tools/disable_maintenance_mode') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-warning btn-icon-text" id="maintenance_mode">
                    <i class="zmdi zmdi-alert-octagon"></i> 关闭维护模式
                </button>
            </form>
        @endif
    </div>
</div>