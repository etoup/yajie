<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

<div class="form-group">
    <div class="fg-line">
        <input type="text" class="form-control" name="title" id="title"  placeholder="标题">
    </div>
</div>

<div class="form-group hidden">
    <div class="fg-line">
        <input type="text" class="form-control" name="slug" id="slug" placeholder="别名">
    </div>
</div>

<div class="form-group">
    <div class="fg-line">
        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="副标题">
    </div>
</div>

<div class="form-group">
    <div class="fg-line">
        <textarea class="form-control auto-size" id="editor" name="content" placeholder="写点什么内容？"></textarea>
    </div>
</div>

<div class="form-group hidden">
    <div class="fg-line">
        <input class="form-control datetime-picker" name="published_at" id="published_at" type="text" value="{{ date('Y-m-d G:i:s') }}">
    </div>
</div>

<div class="checkbox m-b-15 hidden">
    <label>
        <input type="checkbox" name="is_draft" checked>
        <i class="input-helper"></i>
        草稿？
    </label>
</div>

<div class="form-group hidden">
    <div class="fg-line">
        <input type="text" class="form-control" name="layout" id="layout" value="{{ config('blog.post_layout') }}" placeholder="登出">
    </div>
</div>
