@extends('front.main-index')
@section('content')
@section('pageTitle')
دسته ی کتاب ها
@endsection
<div id="content">
    <style>
    #content {
        border: 1px solid #1bff6d;
        border-radius: 4px;
        float: right;
        height: 800px;
        margin: 0 5px;
        width: 1101px;
    }

    #cat-filter-top {
        background: #a7ffc0 none repeat scroll 0 0;
        border: 1px solid #1bff6d;
        border-radius: 4px;
        float: right;
        height: 80px;
        margin: 10px;
        position: relative;
        width: 98%;
    }

    #cat-filter-top .title {
        margin: 10px;
        float: right;
    }

    #cat-filter-top ul {
        float: right;
    }

    #cat-filter-top ul li {
        float: right;
        margin-right: 20px;

    }

    #cat-filter-top ul li span {
        float: right;
        bottom: 5px;
        position: relative;
    }

    #cat-filter-top ul li .selected {
        float: right;
        width: 150px;
        border: 1px solid #1bff6d;
        height: 20px;
        border-radius: 4px;

    }

    #cat-filter-top ul li .options {
        border: 1px solid #1bff6d;
        border-radius: 4px;
        height: auto;
        left: 151px;
        margin-right: -152px;
        margin-top: 24px;
        padding: 0;
        top: 23px;
        width: 150px;
        background: #1bff6d;
        display: none;
    }

    #cat-filter-top ul li .options .option {
        float: right;
        width: 140px;
        height: auto;
        padding-right: 10px;
        margin-right: 0 !important;
    }

    #cat-filter-top ul li ul .option:hover {
        background: #a0faff;
    }

    #back {
        border: 2px solid red;
        border-radius: 13px;
        display: inline-block;
        float: right;
        height: 20px;
        left: 1px;
        margin-right: 64px;
        position: absolute;
        top: 55px;
        width: 40px;
    }

    #yes-no {
        background: red none repeat scroll 0 0;
        border-radius: 8px;
        display: inline-block;
        float: right;
        height: 20px;
        left: 0;
        margin-right: 64px;
        position: absolute;
        top: 0;
        width: 29px;
    }

    #back.active1 {
        background-position: -40px !important border:2px solid #1bff6d;
    }

    #yes-no.active {
        background: green;
    }
    </style>
    <div id="cat-filter-top">
        <form id="form_filter" action="" method="POST">
            @csrf
            <h class="title">فیلتر بر اساس:</h>

            <ul>

                <li class="main-li">
                    <span style="border: none;">بهترین ها:</span>
                    <select name="type">
                        <option value="price">
                            (سعودی) قیمت
                        </option>
                        <option value="newest">
                            جدید ترین
                        </option>
                        <option value="hits">
                            پربازدید ترین
                        </option>
                        <option value="most-soled">
                            پر فروش ترین
                        </option>
                    </select>
                </li>
                <li class="main-li">
                    <span style="border: none;">مکان:</span>
                    <select name="type">
                        <option value="price">
                            (سعودی) قیمت
                        </option>
                        <option value="newest">
                            جدید ترین
                        </option>
                        <option value="hits">
                            پربازدید ترین
                        </option>
                        <option value="most-soled">
                            پر فروش ترین
                        </option>
                    </select>
                </li>
                <li class="main-li">
                    <span style="border: none;">نرخ خدمات:</span>
                    <select name="type">
                        <option value="price">
                            (سعودی) قیمت
                        </option>
                        <option value="newest">
                            جدید ترین
                        </option>
                        <option value="hits">
                            پربازدید ترین
                        </option>
                        <option value="most-soled">
                            پر فروش ترین
                        </option>
                    </select>
                </li>
            </ul>
        </form>
        <span id="back">
            <span id="yes-no"></span>
        </span>
    </div>
    <style>
    #content #content-bottom {
        border: 1px solid #13ff24;
        border-radius: 4px;
        float: right;
        height: 690px;
        margin: 15px 10px 2px;
        width: 98%;
        z-index: -1;
    }

    #content .products-finded {
        border: 2px solid #1bff6d;
        border-radius: 4px;
        float: right;
        height: auto;
        margin: 15px;
        width: 150px;
    }

    #content .products-finded img {
        width: 146px;
        height: 146px;
        margin: 2px;
    }

    #content .products-finded p {
        margin: 0;
        text-align: center;
        font-size: 10px;
        font-weight: bold;
        margin: 5px 0;
    }
    #content .products-finded .add-link {
        text-align: center;
        font-size: 7px;
        font-weight: bold;
        float:right;
        display:inline-block;
        width:100%;
        height:auto;
        float:right;
        background:red;
    }
    #content .products-finded .add-link.active {
       background:blue!important;
    }
    </style>
    <div id="content-bottom" data-name="search_product">
        @foreach($services as $service)
        <div class="products-finded">
            <a href="www.google.com">
                <img src="{{$service->img}}">
                <p class="name">{{$service->worker}}</p>
                <p class="description">{{$service->title}}</p>
                <p class="address">{{strip_tags($service->address->address)}}</p>
            </a>
            <span class="add-link" onClick="addToFavorite({{Auth::user()->id}},{{{$service->id}}},this)">
                افزودن به علاقه مندی ها
</span>
        </div>
        @endforeach
    </div>
</div>
@endsection
<script>
function addToFavorite(user_id,service_id,tag){
    var data={'_token': '{{csrf_token()}}','user_id':user_id,'service_id':service_id};
    var url='{{Route('add.to.favorite')}}';
    $.post(url,data,function(msg){
    $(tag).addClass('active');
});
}
    </script>