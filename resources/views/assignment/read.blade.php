<table class="table table-bordered table-md">
    <tr>
        <th>#</th>
        <th>Assignment Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item )
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->assignmentname}}</td>
        <td>
            <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
            <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
        </td>
        </tr>
        @endforeach
</table>
