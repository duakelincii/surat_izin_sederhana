<div class="col-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Query List Course yang tidak memiliki Course</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-md">
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
                  <th>Assignment Name</th>
                  <th>Keterangan</th>
                </tr>
                @foreach ($course as $item )
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        @if ($item->courseid == true)
                        Tidak Ada
                        @endif
                    </td>
                    <td>{{$item->assignmentname}}</td>
                    <td><div class="badge badge-danger"> Courseid {{$item->courseid}} Tidak Terdaftar</div></td>
                  </tr>
                  @endforeach
              </table>
        </div>
      </div>
    </div>
  </div>
<div class="col-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Query List Course yang tidak memiliki assignment</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-md">
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
                  <th>Assignment Name</th>
                  <th>Keterangan</th>
                </tr>
                @foreach ($assignment as $item )
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->coursename}}</td>
                    <td>
                        @if ($item->assignmentid == true)
                        Tidak Ada
                        @endif
                    </td>
                    <td><div class="badge badge-danger">Assignmentid {{$item->assignmentid}} Tidak Terdaftar</div></td>
                  </tr>
                  @endforeach
              </table>
        </div>
      </div>
    </div>
  </div>
<div class="col-12 col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Query List course Assignment Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
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
                  </tr>
                  @endforeach
              </table>
        </div>
      </div>
    </div>
  </div>
