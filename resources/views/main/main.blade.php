@extends('layouts.master')
@section('content')
<div class="row" id="read">
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
        $.get("{{ url('home/read') }}", {}, function(data,course,assignment ,status) {
            $("#read").html(data,course,assignment);
        });
    }
</script>

@endsection
