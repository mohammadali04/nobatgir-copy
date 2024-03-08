@extends('front.main-index')
@section('content')
<style>
#turn-content{
    float:right;
    width:300px;
    height:400px;
    border:1px solid;
    padding:10px;
    border-radius:4px;
}
#turn-content ul {
    border:1px dotted;
    padding:0;
}
#turn-content ul li{
   margin:20px;
   border-bottom:1px dotted;
}
    </style>
<div id="turn-content">
<ul>
<li>
<span class="title">
زمان:
</span>
<span class="value">
20:30 1/1/1402
</span>
</li>
<li>
<span class="title">
مکان:
</span>
<span class="value">
رهنان خیابان درخشان
</span>
</li>
<li>
<span class="title">
وضعیت پرداخت:
</span>
<span class="value">
پرداخت  شده
</span>
</li>
<li>
<span class="title">
نام صاحب خدمات
</span>
<span class="value">
محمد علی سلیمی
</span>
</li>
<li>
<span class="title">
نام کاربر
</span>
<span class="value">
علی 
</span>
</li>
</ul>
</div>
@endsection