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
#content table tr td{
    padding:10px;
    border:1px solid;
}
</style>
<div id="content">
    <form action="{{Route('servicer.store.table')}}" method="POST">
        @csrf
    <table>
        <tr>
<td>
    ردیف
</td>
<td>
روز
</td>
<td>
مشاهده ساعت ها
</td>
<td>
    ویرایش
</td>
<td>
انتخاب
</td>
</tr>

@foreach($turns as $turn)
@php
$x='';
@endphp
@switch($turn->day_id)
@case (1)
@php
$x='شنبه';
@endphp
@break
@case (2)
@php
$x='یکشنبه';
@endphp
@break
@case (3)
@php
$x='دوشنبه';
@endphp
@break
@case (4)
@php
$x='سه شنبه';
@endphp
@break
@case (5)
@php
$x='چهار شنبه';
@endphp
@break
@case (6)
@php
$x='پنج شنبه';
@endphp
@break
@case (7)
@php
$x='جمعه';
@endphp
@break
@endswitch
<tr>
    <td>
{{$turn->id}}
</td>
    <td>
{{$x}}
</td>
    <td>
<a href="{{Route('show.day.hours',$turn->id)}}">مشاهده</a>
</td>
    <td>
<a>ویرایش</a>
</td>
    <td>
<input type="checkbox">
</td>
</tr>
@endforeach
</table>
    </form>
</div>
@endsection