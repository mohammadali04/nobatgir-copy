@extends('new-front.index')
@section('content')
<style>
#content {
    width: 100%;
    height: auto;
    float: right;
}

#content .row {
    width: 100%;
    height: 40px;
    border-bottom: 1px solid;
    margin: 50px 0;
}

#days .day {
    background: aqua;
}
</style>
<div id="content">
    <form action="{{Route('servicer.store.table')}}" method="POST">
        @csrf
        <div class="row">
        <input id="days" data-jdp name="date">
</div>
        <div class="row input-content">
            <input class="time-input" name="time[]">
        </div>
        <div class="row">
            <button type="submit" class="btn btn-success btn-rounded btn-fw">اجرای عملیات</button>
            <button type="button" id="green" class="btn btn-secondary btn-rounded btn-fw">اضافه کردن ساعت</button>
        </div>
    </form>
</div>

<script>
jalaliDatepicker.startWatch(days);
</script>

<script>
$('#green').click(function() {
    $('#content .input-content').append('<input type="text" class="time-input" name="time[]">');
});
</script>
@endsection