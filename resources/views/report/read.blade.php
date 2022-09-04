<table class="table table-bordered table-md">
    <tr>
      <th>#</th>
      <th>Course Name</th>
      <th>Assignment Name</th>
      <th>Keterangan</th>
    </tr>
    @foreach ($data as $item )
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->coursename}}</td>
        <td>{{$item->assignmentname}}</td>
        <td>
              @if ($item->coursename == null && $item->assignmentname == null)
                  <div class="badge badge-danger"> Assignmentid {{$item->assignmentid}} & Courseid {{$item->courseid}} Tidak Terdaftar</div>
              @elseif ($item->assignmentname == null)
                  <div class="badge badge-danger">Assignmentid {{$item->assignmentid}} Tidak Terdaftar</div>
             @elseif ($item->coursename == null)
                  <div class="badge badge-danger">Courseid {{$item->courseid}} Tidak Terdaftar</div>
              @else
              <div class="badge badge-success">Ready</div>
              @endif
        </td>
        <td>
            <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
            <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
        </td>
      </tr>
      @endforeach
  </table>
