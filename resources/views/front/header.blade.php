<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه ی اصلی</title>
    <script src="{{asset('/js/jquery-3.6.0.min.js')}}"></script>
</head>
<style>
@font-face {
    font-family: 'yekan';
    src: url('/fonts/yekan.ttf') format('truetype'),
        url('/fonts/yekan.eot?#iefix') format('embedded-opentype');
}

body {
    direction: rtl;
    text-align: right;
    font-family: yekan;

}

body li {
    list-style: none;
}

body a {
    cursor: pointer;
    text-decoration:none;
    
}
</style>

<body>
    <style>
    header {
        width: 100%;
        float: right;
        background: #a7ffc0;
        height: 120px;
        font-size: 8pt;
        font-weight: bold;
    }
    </style>
    <header>
        <style>
        #left-header {
            float: left;
            margin: 15px;
        }

        #auth {
            color: grey;
            float: left;
            height: 30px;
            margin: 15px;
            width: 200px;
        }

        #auth .login,
        .register {
            float: right;
            height: 100%;
            padding-top: 3px;
            text-align: center;
            width: 62px;
        }

        #auth .middle-div {
            background: gray none repeat scroll 0 0;
            float: right;
            height: 28px;
            transform: rotate(-30deg);
            width: 2px;
        }

        #basket-top {
            float: left;
            height: 32px;
            margin: 15px;
            width: 120px;
        }

        #basket-top span {
            display: block;
            float: left;
        }

        #basket-top .basket-img {
            background: rgba(0, 0, 0, 0) url("public/images/shopping-cart.png") no-repeat scroll 0 0;
            height: 30px;
            width: 30px;
        }

        #basket-top .matn {
            background: #1bff6d none repeat scroll 0 0;
            border-radius: 30px;
            color: white;
            font-size: 11pt;
            height: 37px;
            margin-right: -8px;
            text-align: center !important;
            width: 60px;

        }

        #basket-top .tedad {
            background: #13ff24 none repeat scroll 0 0;
            border-radius: 14px;
            height: 24px;
            left: -8px;
            position: relative;
            top: -12px;
            width: 24px;
            font-size: 11pt;
            text-align: center;
        }

        #basket-top .tedad p {
            bottom: -3px;
            color: red;
            left: 8px;
            margin: 0;
            position: absolute;
        }

        header .col {
            background: gray none repeat scroll 0 0;
            float: left;
            height: 44px;
            margin: 15px;
            width: 1px;
        }

        #basket-top .hor {
            background: red none repeat scroll 0 0;
            float: left;
            height: 44px;
            margin: 0;
            position: relative;
            right: 4px;
            width: 1px;
        }

        #basket-top .ver {
            background: red none repeat scroll 0 0;
            bottom: -44px;
            height: 1px;
            left: -24px;
            position: relative;
            width: 101px;
        }

        #right-header {
            float: right;
            margin: 15px;

        }

        #right-header #search {
            float: right;
            height: 30px;
            margin: 31px;
            width: 357px;
        }

        #right-header #search .keyword {
            background: #c6cdba none repeat scroll 0 0;
            border-radius: 16px;
            float: right;
            height: 30px;
            left: -28px;
            overflow: hidden;
            position: relative;
            width: 281px;
        }

        #right-header #search .search-icon {
            background: #ccc none repeat scroll 0 0;
            border-radius: 21px;
            float: right;
            height: 100%;
            width: 61px;
        }

        #right-header #search .keyword input {
            border: medium none;
            height: 92%;
            margin: 0;
            width: 99%;
        }

        #right-header .icon {
            float: right;
            width: auto;
            height: auto;
        }

        #right-header .icon {
            width: auto;
            height: 210px;
            float: right;
        }

        #right-header .icon span {
            display: block;
            float: right;
            font-size: 31pt;
            height: 30px;
            margin-right: 2px;
            width: 23px;
        }
        </style>
        <div id="left-header">
            <div id="auth">
                <div class="login">
                    <a>ورود</a>
                </div>
                <div class="middle-div"></div>
                <div class="register">
                    <a>ثبت نام</a>
                </div>
            </div>

            <div id="basket-top">
                <div class="hor"></div>
                <div class="ver"></div>
                <span class="matn">سبد خرید</span>
                <span class="basket-img"></span>
                <span class="tedad">
                    <p>0</p>
                </span>
            </div>
        </div>
        <div id="right-header">
            <div class="icon">
                <span style="color: red;">ق</span><span style="color: red;">ل</span><span
                    style="color: blue;">م</span><span style="color: green;">س</span><span
                    style="color: orange;">ت</span><span style="color: pink;">ا</span><span
                    style="color: orange;">ن</span>
            </div>
            <div id="search">
                <div class="keyword">
                    <input type="text">
                </div>
                <div class="search-icon"><img src="public/images/search.png" alt=""
                        style="float: left;margin: 4px;width: 23px;"></div>
            </div>
        </div>
    </header>

    <body style="direction:rtl">
    <style>

#main{
    float:right;
    padding:20px;
    width:83%;
    margin:10px 50px !important;
}
#main , #panel-content-left , #panel-content-right{
    border:1px solid;
    border-radius:4px;
    margin:5px;
}
</style>