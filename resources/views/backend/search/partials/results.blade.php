<table class="table table-condensed table-vmiddle">
    <thead>
    <tr>
        <th>内容类型</th>
        <th>标题</th>
        <th>创建</th>
        <th>最近更新</th>
    </tr>
    </thead>
    <tbody>
    @if(empty($posts->toArray()) && empty($tags->toArray()) && empty($users->toArray()))
        <tr>
            <td>没有找到结果.</td>
            <td></td>
            <td></td>
        </tr>
    @else
        @foreach ($posts as $post)
            <tr>
                <td><i class="zmdi zmdi-book"></i>&nbsp;&nbsp;文章</td>
                <td><a href="{{ url('admin/post') }}/{{ $post->id }}/edit">{{ $post->title }}</a></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('M d, Y') }}</td>
            </tr>
        @endforeach

        @foreach ($tags as $tag)
            <tr>
                <td><i class="zmdi zmdi-label"></i>&nbsp;&nbsp;标签</td>
                <td><a href="{{ url('admin/tag') }}/{{ $tag->id }}/edit">{{ $tag->title }}</a></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->created_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->updated_at)->format('M d, Y') }}</td>
            </tr>
        @endforeach

        @foreach ($users as $user)
            <tr>
                <td><i class="zmdi zmdi-account"></i>&nbsp;&nbsp;用户</td>
                <td><a @if (Auth::user()->id === $user->id) href="{{ url('admin/profile') }}" @else href="{{ url('admin/user') }}/{{ $user->id }}/edit" @endif>{{ $user->display_name }}</a></td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('M d, Y') }}</td>
                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->updated_at)->format('M d, Y') }}</td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>