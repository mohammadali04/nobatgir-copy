@extends('front.main-index')
@section('content')
<style>
#content table tr td{
    padding:10px;
    border:1px solid;
}
#content button{
    width:auto;
    height:auto;
    background:green;
    border-radius:4px;
    color:white;
}
</style>
<div id="content">
<table>
<tr>
<td>
بازه ی زمانی
</td>
<td>
ویرایش
</td>
</tr>
<form action="{{Route('update.day.time',$turn->id)}}" method="POST">
    @csrf
<tr>
<td>
    <input type="text" name="time" value="{{$turn->time}}">
</td>
<td>
    <button>ویرایش</button>
</td>
</tr>
</form>
</table>
</div>
@endsection