<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">姓</label>
        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="姓">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">名字</label>
        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="名字">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">显示姓名</label>
        <textarea class="form-control auto-size" id="display_name" name="display_name" placeholder="显示姓名">{{ old('display_name') }}</textarea>
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">邮箱</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="邮箱">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">密码</label>
        <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="密码">
    </div>
</div>

<br>

<div class="form-group">
    <label class="radio radio-inline m-r-20">
        <input type="radio" name="role" id="role" value="0">
        <i class="input-helper"></i>
        用户
    </label>

    <label class="radio radio-inline m-r-20">
        <input type="radio" name="role" value="1">
        <i class="input-helper"></i>
        管理员
    </label>
</div>

<br>