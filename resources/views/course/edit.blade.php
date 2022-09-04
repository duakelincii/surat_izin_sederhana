<div class="p2">
    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" name="coursename" id="coursename" value="{{ $data->coursename }}" class="form-control"
            placeholder="Course Name">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
