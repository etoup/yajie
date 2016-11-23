<div class="modal fade" id="cache-clear" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">你确定吗?</h4>
            </div>
            <div class="modal-body">
                <p>这操作将清除当前网站的应用程序缓存，以及优化的速度和性能.</p>
            </div>
            <div class="modal-footer">
                <form class="form-inline" action="{{ url('admin/tools/cache_clear') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>
                    <button class="btn btn-link btn-icon-text">
                        <i class="zmdi zmdi-delete"></i> 清理缓存
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>