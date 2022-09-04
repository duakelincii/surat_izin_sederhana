@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
        <div class="card" >
            <div class="card-header">
                <h4>Query List Assignment Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <button class="btn btn-primary mb-4" onClick="create()">+ Tambah Assignment</button>
                <div id="read"></div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        read()
    });

    setInterval(function(){
                    read()
                }, 15000);

    function read() {
        $.get("{{ url('assignment/read') }}", {}, function(data, status) {
            $("#read").html(data);
        });
    }

    function create() {
        $.get("{{ url('assignment/create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html('Create Assignment')
            $("#page").html(data);
            $("#exampleModal").modal('show');

        });
    }

    function store() {
        var assignmentname = $("#assignmentname").val();
        $.ajax({
            type: "get",
            url: "{{ url('assignment/store') }}",
            data: "assignmentname=" + assignmentname,
            success: function(data) {
                $(".close").click();
                setInterval(function(){
                    read()
                }, 15000);
            }
        });
    }

    function show(id) {
        $.get("{{ url('assignment/show') }}/" + id, {}, function(data, status) {
            $("#exampleModalLabel").html('Edit Assignment')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function update(id) {
        var assignmentname = $("#assignmentname").val();
        $.ajax({
            type: "get",
            url: "{{ url('assignment/update') }}/" + id,
            data: "assignmentname=" + assignmentname,
            success: function(data) {
                $(".close").click();
                setInterval(function(){
                    read()
                }, 15000);
            }
        });
    }

    function destroy(id) {

        $.ajax({
            type: "get",
            url: "{{ url('assignment/destroy') }}/" + id,
            data: "name=" + name,
            success: function(data) {
                $(".close").click();
                setInterval(function(){
                    read()
                }, 15000);
            }
        });
    }
</script>
@endsection
