@extends('front.main-index')
@section('content')
<style>
#content {
    width: 300px;
    height: 300px;
    float: right;
    border: 1px solid;
    padding: 10px;
    position:relative;
    right:0;
    left:0;
    margin:auto;

}

#content ul {
    width: 100%;
    margin: 0;
    padding: 0;
    float: right;
    padding:0;
}

#content ul li {
    float: right;
    width: 100%;
    margin: 20px 0;
    padding: 0;
    border-bottom:1px solid;
}

#content ul li label {
    margin: 10px 50px;

}


</style>
<div id="content">
    <ul>
        <li><label>نام رزرو کننده:</label><label></label></li>
    </ul>
    <ul>
        <li><label>تاریخ:</label><label></label></li>
    </ul>
    <ul>
        <li><label>ساعت:</label><label></label></li>
    </ul>
    <ul>
        <li><label>تاریخ:</label><label></label></li>
    </ul>
</div>
@endsection