<form class="keyboard-save" role="form" method="POST" id="settings" action="{{ url('admin/settings') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">标题</label>
            <input type="text" class="form-control" name="blog_title" id="blog_title" value="{{ $data['blogTitle'] }}" placeholder="标题">
        </div>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">副标题</label>
            <input type="text" class="form-control" name="blog_subtitle" id="blog_subtitle" value="{{ $data['blogSubtitle'] }}" placeholder="副标题">
        </div>
        <small>用几句话，介绍一下这个网站是做什么的.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">描述</label>
            <input type="text" class="form-control" name="blog_description" id="blog_description" value="{{ $data['blogDescription'] }}" placeholder="描述">
        </div>
        <small>设置你想添加到描述（<code>description</code>）元标签的博客描述.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">关键字</label>
            <input type="text" class="form-control" name="blog_seo" id="blog_seo" value="{{ $data['blogSeo'] }}" placeholder="Blog SEO">
        </div>
        <small>填写用逗号分隔搜索引擎优化关键字（<code>keywords</code>）标签.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">作者</label>
            <input type="text" class="form-control" name="blog_author" id="blog_author" value="{{ $data['blogAuthor'] }}" placeholder="Blog Author">
        </div>
        <small>设置将要出现的名称为作者（<code>author</code>）元标签.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-disqus"></i> Disqus用户评论</label>
            <input type="text" class="form-control" name="disqus_name" id="disqus_name" value="{{ $data['disqus'] }}" placeholder="Disqus Shortname">
        </div>
        <small>Enter your Disqus shortname to enable comments in your blog posts or <a href="https://github.com/austintoddj/canvas#advanced-options" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-trending-up"></i> Google Analytics</label>
            <input type="text" class="form-control" name="ga_id" id="ga_id" value="{{ $data['analytics'] }}" placeholder="Google Analytics Tracking ID">
        </div>
        <small>Enter your Google Analytics Tracking ID or <a href="https://github.com/austintoddj/canvas#advanced-options" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-twitter-box"></i> Twitter Card Type</label>
            <select name="twitter_card_type" id="twitter_card_type" class="selectpicker">
                <option @if ($data['twitterCardType'] == "none") selected @endif value="none">No card</option>
                <option @if ($data['twitterCardType'] == "summary") selected @endif value="summary">Summary card</option>
                <option @if ($data['twitterCardType'] == "summary_large_image") selected @endif value="summary_large_image">Summary card with large image</option>
            </select>
        </div>
        <small>Configure the way Twitter <a href="https://cards-dev.twitter.com/validator" target="_blank">displays links to your blog</a> or <a href="https://dev.twitter.com/cards/overview" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> 保存更改</button>
    </div>
</form>
