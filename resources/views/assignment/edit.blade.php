<div class="p2">
    <div class="form-group">
        <label for="">Assignment Name</label>
        <input type="text" name="assignmentname" id="assignmentname" value="{{ $data->assignmentname }}" class="form-control"
            placeholder="Assignment Name">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
