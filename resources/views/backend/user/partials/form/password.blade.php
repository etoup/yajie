<form class="keyboard-save" action="{{ url('admin/user/' . $data['id'] . '/privacy') }}" method="POST" role="form" autocomplete="false" id="passwordUpdate">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="POST">

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">新密码</label>
            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="新密码">
        </div>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">确认新密码</label>
            <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="确认新密码">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 保存</button>
        &nbsp;
        <a href="{{ url('admin/user/' . $data['id'] . '/edit') }}"><button type="button" class="btn btn-link">取消</button></a>
    </div>
</form>
