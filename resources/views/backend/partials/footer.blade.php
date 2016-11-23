<footer id="footer">
    欢迎使用 <a href="http://canvas.toddaustin.io" target="_blank">Canvas</a>系统&nbsp;&#183;&nbsp; {{ App\Models\Settings::canvasVersion() }}

    <ul class="f-menu">
        <li><a href="{{ url('admin') }}">控制台</a></li>
        <li><a href="{{ url('admin/post') }}">文章</a></li>
        <li><a href="{{ url('admin/tag') }}">标签</a></li>
        <li><a href="{{ url('admin/upload') }}">媒体</a></li>
        <li><a href="{{ url('admin/tools') }}">工具</a></li>
        <li><a href="{{ url('admin/settings') }}">设置</a></li>
        <li><a href="mailto:austin.todd.j@gmail.com">支持帮助</a></li>
    </ul>
</footer>