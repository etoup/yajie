<div class="card">
    <div class="card-header">
        <h2>最近操作日志
            <small>最近发表的4篇博客文章:</small>
        </h2>

        <br>

        @foreach ($data['recentPosts'] as $post)
            <a href="{{ url('admin/post/' . $post->id . '/edit') }}">{{ $post->title }}</a> <small>{{ $post->created_at->format('M d, Y') }} at {{ $post->created_at->format('g:i A') }}</small>
            <hr>
        @endforeach
    </div>
</div>