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
    <form action="{{Route('servicer.update.info',$service->id)}}" method="POST">
        @csrf
        <div class="row">
            <label style="margin:20px">نام</label>
            <input type="text" name="worker" value="{{$service->worker}}">
        </div>
        <div class="row">
            <label style="margin:20px">عنوان شغلی</label>
            <input type="text"  name="title" value="{{$service->title}}">
        </div>
        <div class="row">
            <label style="margin:20px">تصویر</label>
            <input type="text"  name="img" value="{{$service->img}}">
        </div>
        <div class="row">
            <label style="margin:20px">آدرس</label>
            <textarea name="address">
                {{$address}}
            </textarea>
        </div>
        <div class="row">
            <label style="margin:20px">توضیحات</label>
            <textarea name="detail">
                {{$service->detail}}
            </textarea>
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