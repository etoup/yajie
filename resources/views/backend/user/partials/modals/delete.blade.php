<div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">确认删除用户?</h4>
            </div>
            <div class="modal-body">
                <p>确认删除该用户?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('admin.user.destroy', $data['id']) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-link btn-icon-text">
                        <i class="zmdi zmdi-delete"></i> 确认删除
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>