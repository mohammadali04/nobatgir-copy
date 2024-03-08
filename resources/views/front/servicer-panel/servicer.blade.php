@extends('front.main-index')
@section('content')
@include('front.servicer-panel.side-bar-right-servicer')
<div id="panel-content-left">
    <div>
        <div>
            <h4 class="card-title">پروفایل صاحب خدمات</h4>
            <div id="top">
                <span id="profile-picture">
                    <img src="{{asset('images/profile-img.jpg')}}">
                </span>
            </div>
            <div id="content-bottom">
                <ul>
                    <li>
                        محمد علی سلیمی
                    </li>
                    <li>
                        پیرایش و اصلاح مو
                    </li>
                    <li>
                        اصفهان
                    </li>
                    <li>
                        کد سرویس:1542
                    </li>
                    <li>
                        <p>
                            این جانب در سال 86 آغاز به کار کردم و سابقه ی زیادی در کارم دارم .
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection