@extends('front.main-index')
@section('content')
<style>
#content {
    direction: rtl;
    width: 700px;
    float: right;
    padding: 20px;
}

#content #top-content {
    float: right;
    width: 100%;

}

#content #top-contenut ul li {
    margin: 10px 0;

}

#content #top-contenut ul li span {
    float: right;
    display: block;
    width: auto;
    height: 30px;
    padding: 5px;
    text-align: center;
}

#content #top-contenut ul li .value {
    margin-right: 20px;
}
</style>

<div id="content">
    <div id="top-content">
        <ul>
            <li>
                <span class="title">
                    نام:
                </span>
                <span class="value">
                    محمد علی سلیمی
                </span class="title">
            </li>
            <li>
                <span class="title">
                    بیوگرافی
                </span>
                <span class="value">
                    <p>
                        رهنان خیابان درخشان
                    </p>
                </span>
            </li>
            <li>
                <span class="title">
                    آدرس
                </span>
                <span class="value">
                    <p>
                        رهنان خیابان درخشان
                    </p>
                </span>
            </li>
        </ul>
    </div>
    <div id="bottom-content">
        <table>
            @foreach($days as $day)
            <tr>
                <td>
                    {{$day['day']}}
                </td>
                @foreach($day['time'] as $time)
                <td style="background:@if($time->active==1)
                {{'red'}}
                @else
                {{'green'}}
                @endif">
                    <a class="user-turn-form" href="{{url('search/bookTurn/'.$time->id.'/1')}}">
                        <input type="hidden" name="user_id" value="1">
                        <input type="hidden" name="time" value="{{$time->time}}">
                        {{$time->time}}
                    </a>
                </td>
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
    <style>
    #comments {
        float: right;
        width: 100%;
        height: auto;
        border: 1px solid;
    }

    #comments .row {
        width: 100%;
        float: right;
        height: auto;
        border-bottom: 1px solid;
    }

    #add-comment {
        float: right;
        width: 95%;
        margin: 20px 15px;
        border: 1px solid;
        height: 400px;
    }

    #add-comment #add-comment-content {
        border: 1px solid #ccc;
        border-bottom-right-radius: 40px;
        border-top-left-radius: 40px;
        box-shadow: -2px 3px 1px 1px #ccc;
        height: 241px;
        margin: 40px;
        overflow: hidden;
        width: 300px;
    }

    #add-comment-content .score {
        float: right;
        height: 32px;
        margin: 20px 0;
        text-align: center;
        width: 282px;
    }

    #add-comment-content .score ul {
        float: left;
        width: 218px;
        padding: 0 0 0 30px;
    }

    #add-comment-content .score ul li {
        float: left;
        height: 32px;
        padding-right: 10px;
        width: 32px;
    }

    #add-comment-content .score ul li .star {
        display: block;
        width: 32px;
        height: 32px;
        background: url("/images/star-1.png") no-repeat;
    }

    #add-comment-content .score ul li .star.active {
        background: url("/images/star-2.png") no-repeat;
    }

    #add-comment #add-comment-content .add-comment-button {
        position: relative;
        left: 0;
        right: 0;
        margin: auto;
        width: 150px;
        background: #1bff6d;
        color: white;
        border-radius: 20px;
        top: 100px;
        height: 40px;
    }

    #add-comment #add-comment-content .add-comment-button p {
        position: absolute;
        margin: 2px 0;
        width: 100%;
        text-align: center;
    }

    #add-comment #user-name-content {
        border: 1px solid #ccc;
        border-bottom-right-radius: 40px;
        border-top-left-radius: 40px;
        box-shadow: -2px 3px 1px 1px #ccc;
        height: 40px;
        margin: 40px;
        position: relative;
        top: 110px;
        width: 150px;
    }

    #add-comment #user-name-content p {
        margin: 2px 0;
        position: absolute;
        text-align: center;
        width: 100%;
    }

    #add-comment #user-name-content .first-alphabet {
        background: #13ff24 none repeat scroll 0 0;
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        position: absolute;
        right: -8px;
        text-align: center;
        top: -6px;
        width: 40px;
    }

    #add-comment #add-comment-content .report-problem {
        border: 1px solid gray;
        border-radius: 20px;
        color: gray;
        display: block;
        float: left;
        font-size: 8pt;
        height: 40px;
        line-height: 38px;
        margin: 30px 0 0 5px;
        text-align: center;
        width: 89px;
    }

    #dark {
        background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
        height: 100%;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 4;
        display: none;
    }

    #add-comment-user {
        width: 500px;
        height: 420px;
        position: fixed;
        background: white;
        z-index: 5;
        left: 0;
        right: 0;
        margin: auto;
        top: 150px;
        display: none;
    }

    #add-comment-user h {
        width: 100%;
        height: 30px;
        text-align: center;
        float: right;

    }

    #add-comment-user h i {
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        margin-right: 5px;
        background: url("/images/slices.png") no-repeat scroll -105px -123px;
    }

    #add-comment-user .content {
        float: right;
        width: 100%;
        height: 380px;
    }

    #add-comment-user .content input {
        border: 1px solid gray;
        border-radius: 4px;
        display: block;
        float: right;
        height: 35px;
        margin: 10px;
        width: 45%;
    }

    #add-comment-user .content .comment-content {
        border: 1px solid gray;
        border-radius: 4px;
        display: block;
        float: right;
        height: 257px;
        margin: 5px auto;
        width: 95%;
    }

    #add-comment-user .content .add {
        background: #13ff24 none repeat scroll 0 0;
        border-radius: 4px;
        bottom: 30px;
        color: white;
        float: left;
        font-size: 7pt;
        height: 30px;
        left: 1px;
        line-height: 27px;
        margin: 3px 10px;
        position: relative;
        text-align: center;
        width: 50px;
    }

    #add-comment-user .score {
        height: 32px;
        margin: auto;
        text-align: center;
        width: 282px;
        position: relative;
        left: 0;
        right: 0;

    }

    #add-comment-user .score ul {
        float: left;
        width: 218px;
        padding: 0 0 0 30px;
        margin: 0;
    }

    #add-comment-user .score ul li {
        float: left;
        height: 32px;
        padding-right: 10px;
        width: 32px;
    }

    #add-comment-user .score ul li .star {
        display: block;
        width: 32px;
        height: 32px;
        background: url("/images/star-1.png") no-repeat;
    }

    #add-comment-user .score ul li .star.active {
        background: url("public/images/star-2.png") no-repeat;
    }

    #offer-button {
        border: 1px solid gray;
        border-radius: 4px;
        display: inline-block;
        float: right;
        font-size: 8pt;
        height: 20px;
        line-height: 20px;
        margin: 6px 15px;
        padding: 2px;
        width: auto;
        color: gray;
        font-weight: bold;
        cursor: pointer;
    }

    #offer-button.active {
        color: green;
        border: 1px solid green;
    }
    </style>
    <div id="comments">
        <div id="add-comment">
            <div id="add-comment-content">
                <div class="score">
                    <ul>
                        <li><span class="star"></span></li>
                        <li><span class="star"></span></li>
                        <li><span class="star"></span></li>
                        <li><span class="star"></span></li>
                        <li><span class="star"></span></li>
                    </ul>
                </div>
                <div class="add-comment-button">
                    <p>نوشتن نظر</p>
                </div>
                <div id="user-name-content">
                    <span class="first-alphabet">م</span>
                    <p>محمد علی</p>
                </div>
                <a class="report-problem" href="">گزارش مشکل</a>
            </div>
        </div>
        <div id="dark">
            <div id="add-comment-user">
                <form action="{{Route('add.comment')}}" method="POST">
                    @csrf
                    <h>
                        بستن<i class="close"></i></h>
                    <div class="content">
                        @auth
                        <input type="text" name="name" value="{{Auth::user()->name}}">
                        <input type="text" name="email" value="{{Auth::user()->email}}">
                        @else
                        <input type="text" name="name">
                        <input type="text" name="email">
                        @endauth
                        <textarea name="body" class="comment-content"></textarea>
                        <div class="score">
                            <ul>
                                <li><span class="star"></span></li>
                                <li><span class="star"></span></li>
                                <li><span class="star"></span></li>
                                <li><span class="star"></span></li>
                                <li><span class="star"></span></li>
                            </ul>
                        </div>
                        <span id="offer-button">پیشنهاد میکنم</span>
                        <button type="submit" class="add">ثبت نظر</button>
                    </div>
            </div>
            <input id="stars-score" type="hidden" name="score" value="">
            <input type="hidden" name="product_id" value="{{}}">
            <input id="offer-input" type="hidden" name="offer" value="0">
            </form>
        </div>
    </div>
</div>
<script>
function userTurnForm() {
    $('.user-turn-form').submit();
}
//for add comment
$('#add-comment-content .add-comment-button').click(function() {
    $('#dark').fadeIn(200);
    $('#add-comment-user').fadeIn(200);
});
$('#add-comment-user .add').click(function() {
    $('#dark').fadeOut(200);
    $('#add-comment-user').fadeOut(200);
});
$('#add-comment-user h .close').click(function() {
    $('#dark').fadeOut(200);
    $('#add-comment-user').fadeOut(200);
});
$('#offer-button').click(function() {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
        $('#offer-input').val(1);
    } else {
        $('#offer-input').val(0);
    }
});
//for the add score
$('#add-comment-user .score ul li').click(function() {
    var index = $(this).index();
    var i = 0;
    $('#add-comment-user .score ul li').find('span').removeClass('active');
    while (i < index + 1) {
        $('#add-comment-user .score ul li').eq(i).find('span').addClass('active');
        i++;
    }
    $('#stars-score').val(index + 1);
    var x = 0;
    $('#add-comment-content .score ul li').find('span').removeClass('active');
    while (x < index + 1) {
        $('#add-comment-content .score ul li').eq(x).find('span').addClass('active');
        x++;
    }
});
</script>

@endsection