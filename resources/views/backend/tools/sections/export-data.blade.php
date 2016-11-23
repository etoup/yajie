<div class="card">
    <div class="card-header">
        <h2>导出数据
            <small>当你点击下面的按钮系统将为你保存到你的电脑上创建一个目录的CSV文件。该文档将包含系统中的所有的帖子、标签、用户信息和关系。一旦下载完成，就可以使用它轻松地导入到另一个安装的系统中。
            </small>
        </h2>
    </div>
    <div class="card-body card-padding">
        <form class="form-inline" action="{{ url('admin/tools/download_archive') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary btn-icon-text" id="download_archive">
                <i class="zmdi zmdi-archive"></i> 下载
            </button>
        </form>
    </div>
</div>