@extends('front.main-index')
@section('content')
@include('front.panel.side-bar-right-servicer')
<div id="panel-content-left">
    <style>
.row{
    width:100%;
    border-bottom:1px solid;

}
.row ul li{
    margin:10px 0;
}
        </style>
    <div class="row">
        <h4>
            نوبت رزور شده توسط:
        </h4>
        <ul>
            <li>
                <span class="name">
                    محمد علی سلیمی
                </span>
            </li>
            <li>
                <span class="date">
                    سه شنبه 1/1/1402 ساعت 9.5
                </span>
            </li>
            <li>
                <span class="paid">
                    پزداخت شده
                </span>
            </li>
        </ul>
    </div>
    <div class="row">
        <h4>
            نوبت رزور شده توسط:
        </h4>
        <ul>
            <li>
                <span class="name">
                    محمد علی سلیمی
                </span>
            </li>
            <li>
                <span class="date">
                    سه شنبه 1/1/1402 ساعت 9.5
                </span>
            </li>
            <li>
                <span class="paid">
                    پزداخت شده
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection