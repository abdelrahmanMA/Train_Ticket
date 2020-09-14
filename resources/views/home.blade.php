@extends('template')

@section('content')
<div class="wrapper">
    <div class="form-wrapper">
        <form action="/api/tickets" method="get" autocomplete="off">
            <div class="row form-group mb-2">
                <label for="date-id-switch" class="mr-2">Date</label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="date-id-switch">
                    <label class="custom-control-label" for="date-id-switch">ID</label>
                </div>
            </div>
            <div class="form-group row mb-2">
                <input type="number" class="form-control" id="ticket-id" name="id" placeholder="Ticket ID">
            </div>
            <div class="row form-group mb-2 date">
                <div class="col from_date" data-provide="datepicker">
                    <input type="text" class="form-control datepicker" id="from_date"  name="from_date" placeholder="From Date">
                    {{-- <input type="hidden" name="from_date"> --}}
                </div>
                <div class="col to_date" data-provide="datepicker">
                    <input type="text" class="form-control datepicker" id="to_date" name="to_date" placeholder="To Date">
                    {{-- <input type="hidden" name="to_date"> --}}
                </div>
            </div>
            <div class="row button-wrapper">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

    </div>
</div>
@stop
@section('footer')
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    });

    $date = $('.date');
    $id = $('#ticket-id');
    $from_date = $("#from_date");
    $to_date = $("#to_date");
    $('#date-id-switch').on('change', function(){
        var id_checked = this.checked;
        toggle_view(id_checked);
    })
    function toggle_view(id_checked = false){
        if(id_checked){
            $id.css('display', 'flex');
            $date.css('display', 'none');
            $from_date.val("");
            $to_date.val("");
        }else{
            $date.css('display', 'flex');
            $id.css('display', 'none');
            $id.val("");
        }
    }
    toggle_view();
</script>
@stop
