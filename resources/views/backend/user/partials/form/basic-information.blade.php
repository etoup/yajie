<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">姓</label>
        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $data['first_name'] }}" placeholder="姓">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">名字</label>
        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $data['last_name'] }}" placeholder="名字">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">显示姓名</label>
        <input type="text" class="form-control" name="display_name" id="display_name" value="{{ $data['display_name'] }}" placeholder="显示姓名">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">职业</label>
        <input type="text" class="form-control" name="job" id="job" value="{{ $data['job'] }}" placeholder="职业">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">性别</label>
        <select name="gender" id="gender" class="selectpicker">
            <option @if($data['gender'] == null) selected @endif value="">请选择</option>
            <option @if ($data['gender'] === 'Male') selected @endif value="Male">男</option>
            <option @if ($data['gender'] === 'Female') selected @endif value="Female">女</option>
        </select>
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">生日</label>
        <input type="text" class="form-control datetime-picker" name="birthday" id="birthday" value="{{ $data['birthday'] }}" placeholder="YYYY-MM-DD" data-mask="0000-00-00">
    </div>
</div>

<br>

<div class="form-group">
    <div class="fg-line">
        <label class="fg-label">状态</label>
        <select name="relationship" id="relationship" class="selectpicker">
            <option @if ($data['relationship'] === null) selected @endif value="">请选择</option>
            <option @if ($data['relationship'] === 'Single') selected @endif value="Single">单身</option>
            <option @if ($data['relationship'] === 'In a relationship') selected @endif value="In a relationship">有对象</option>
            <option @if ($data['relationship'] === 'Engaged') selected @endif value="Engaged">订婚</option>
            <option @if ($data['relationship'] === 'Married') selected @endif value="Married">已婚</option>
            <option @if ($data['relationship'] === 'It\'s complicated') selected @endif value="It's complicated">很复杂</option>
            <option @if ($data['relationship'] === 'In an open relationship') selected @endif value="In an open relationship">开放状态</option>
            <option @if ($data['relationship'] === 'Widowed') selected @endif value="Widowed">独居</option>
            <option @if ($data['relationship'] === 'Separated') selected @endif value="Separated">分居</option>
            <option @if ($data['relationship'] === 'Divorced') selected @endif value="Divorced">离婚</option>
            <option @if ($data['relationship'] === 'In a civil union') selected @endif value="In a civil union">伴侣</option>
            <option @if ($data['relationship'] === 'In a domestic partnership') selected @endif value="In a domestic partnership">同性伴侣</option>
        </select>
    </div>
</div>
