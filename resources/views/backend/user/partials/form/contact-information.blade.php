<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">手机号码</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{ $data['phone'] }}" placeholder="手机号码">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">邮箱地址</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $data['email'] }}" placeholder="邮箱地址">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">地址</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ $data['address'] }}" placeholder="地址">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">城市</label>
        <input type="text" class="form-control" name="city" id="city" value="{{ $data['city'] }}" placeholder="城市">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">国家</label>
        <input type="text" class="form-control" name="country" id="country" value="{{ $data['country'] }}" placeholder="国家">
    </div>
</div>

@include('backend.profile.partials.modals.resume-help')