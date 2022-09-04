@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Query List Course Table</h4>
            </div>
            <div class="card-body" >
                <div class="table-responsive">
                <button class="btn btn-primary mb-4" onClick="create()">+ Tambah Course</button>
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
        $.get("{{ url('course/read') }}", {}, function(data, status) {
            $("#read").html(data);
        });
    }

    function create() {
        $.get("{{ url('course/create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html('Create Course')
            $("#page").html(data);
            $("#exampleModal").modal('show');

        });
    }


    function store() {
        var coursename = $("#coursename").val();
        $.ajax({
            type: "get",
            url: "{{ url('course/store') }}",
            data: "coursename=" + coursename,
            success: function(data) {
                $(".close").click();
                setInterval(function(){
                    read()
                }, 15000);
            }
        });
    }

    function show(id) {
        $.get("{{ url('course/show') }}/" + id, {}, function(data, status) {
            $("#exampleModalLabel").html('Edit Course')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function update(id) {
        var coursename = $("#coursename").val();
        $.ajax({
            type: "get",
            url: "{{ url('course/update') }}/" + id,
            data: "coursename=" + coursename,
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
            url: "{{ url('course/destroy') }}/" + id,
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
