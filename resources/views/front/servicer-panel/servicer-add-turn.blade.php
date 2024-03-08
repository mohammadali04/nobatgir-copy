@extends('front.main-index')
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
#days .day{
    background:aqua;
}
</style>
<div id="content">
    <form action="{{Route('servicer.store.table')}}" method="POST">
        @csrf
        <div class="row">
            <label style="margin:20px">روز</label>
            <select id="days" name="day" style="margin:20px">
                <option class="day" value="1">شنبه</option>
                <option class="day" value="2">یکشنبه</option>
                <option class="day" value="3">دوشنبه</option>
                <option class="day" value="4">سه شنبه</option>
                <option class="day" value="5">چهار شنبه</option>
                <option class="day" value="6">پنجشنبه</option>
                <option class="day" value="7">جمعه</option>
            </select>
        </div>
        <div class="row input-content">
            <input class="time-input" name="time[]">
        </div>
        <div>
            <button type="submit">اجرای عملیات</button>
            <span id="green" style="background:green;width:auto ;height:auto; display:inline-block ;color:white">اضاقه کردن ساعت</span>
        </div>
    </form>
</div>
<script>
$('#green').click(function() {
    $('#content .input-content').append('<input type="text" class="time-input" name="time[]">');
});
</script>
@endsection