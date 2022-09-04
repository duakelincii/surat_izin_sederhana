<div class="p2">
    <div class="form-group">
        <label for="">Course ID</label>
        <input type="text" name="courseid" id="courseid" value="{{ $data->courseid }}" class="form-control"
            placeholder="Course ID">
    </div>
    <div class="form-group">
        <label for="">Assignment ID</label>
        <input type="text" name="assignmentid" id="assignmentid" value="{{ $data->assignmentid }}" class="form-control"
            placeholder="Assignment ID">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
