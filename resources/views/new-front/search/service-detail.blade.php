@extends('new-front.index')
@section('content')
<style>
#content {
    direction: rtl;
    width: 700px;
    float: right;
    padding: 20px;
    margin: 20px;
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

#content #bottom-content {
    float: right;
}

.table tr tbody td {
    color: white;
}

#turn-table {}

#turn-table a {
    width: 100%;
    height: 100%;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">صفحه جزئیات
            <small>سرویس</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.html">خانه</a>
            </li>
            <li class="active">سرویس</li>
        </ol>
    </div>
</div>
<div class="row">

    <div class="col-md-8" id="turn-content">
    <input class="srvc_id" type="hidden" name="service_id" value="{{$service->id}}">

        <table class="table" id="turn-table" style="border-collapse:separate;border-spacing:5px;color:white">

            <tbody>

                @foreach($days as $key => $day)
                
                <tr>
                    <input type="hidden" name="currentTime" value="{{$day[0]->date}}">
                    <td> {{$key}}</td>
                    @foreach($day as $time)
                    <td style="background:@if($time->active==1){{'red'}}@else{{'green'}}@endif">
                    @if($time->active==1)
                    {{$time->time}}
                    @else
                        <a class="user-turn-form" href="{{url('search/bookTurn/'.$time->id.'/1')}}">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="time" value="{{$time->time}}">
                            {{$time->time}}
                        </a>
                        @endif
                    </td>
                    @endforeach

                </tr>
                @endforeach
            </tbody>
        </table>
        <button id="next-week-button" onclick="showNextWeek()">هقته ی بعد</button>
        
    </div>

    <script>
        function showNextWeek(){
            var currentTime=$('#turn-table tr:last-child input').val();
        var data={'_token': '{{csrf_token()}}','currentTime':currentTime};
        var url='{{Route('show.next.week')}}';
        $.post(url,data,function (msg){
            console.log(msg['day']);
            $('#turn-table').html('');
            var i=1;
            $.each(msg,function(index,value){
                $('#turn-table').append('<tr class="tr'+i+'"><input type="hidden" name="currentTime" value="'+value[0]['date']+'"><td>'+index+'</td></tr>');
                $.each(value,function(index2,value2){
                    console.log(value2);
                    var color='';if(value2['active']==1){color='red';}else{color='green';}$('#turn-table .tr'+i+'').append('<td style="background:'+color+'"><a class="user-turn-form" href="/search/bookTurn/'+value2['id']+'/1"><input type="hidden" name="user_id" value="1"><input type="hidden" name="time" value="'+value2['time']+'">'+value2['time']+'</a></td>');
                });
                i++;
            });
            $('#previouse-week-button').remove();
            $('#turn-content').append('<button id="previouse-week-button" button onclick="showPreviouseWeek()">هقته ی قبل</button>');
            if(msg==''){
                var service_id = $('#turn-content .srvc_id').val();
                $('#next-week-button').remove();
                $('#previouse-week-button').remove();
                $('#turn-content').append('<p>برای این هفته نوبت تعریف نشده است.</p>');
                $('#turn-content').append('<a href="/search/show-service-detail/'+service_id+'">بازگشت به صفحه ی اول</a>');
            }
        });
        }

        function showPreviouseWeek(){
            var currentTime=$('#turn-table tr:first-child input').val();
            var data={'_token':'{{csrf_token()}}','currentTime':currentTime};
            var url='{{Route('show.previouse.week')}}';
            $.post(url,data,function (msg){
                $('#turn-table').html('');
                var i=1;
            $.each(msg,function(index,value){
                $('#turn-table').append('<tr class="tr'+i+'"><input type="hidden" name="currentTime" value="'+value[0]['date']+'"><td>'+index+'</td></tr>');
                $.each(value,function(index2,value2){
                    console.log(value2);
                    var color='';if(value2['active']==1){color='red';}else{color='green';}$('#turn-table .tr'+i+'').append('<td style="background:'+color+'"><a class="user-turn-form" href="/search/bookTurn/'+value2['id']+'/1"><input type="hidden" name="user_id" value="1"><input type="hidden" name="time" value="'+value2['time']+'">'+value2['time']+'</a></td>');
                });
                i++;
            });
            });
        }
        </script>
    <div class="col-md-4">
        <img style="width:100px;height:100px;border-radius:50%" src="{{$service->img}}">
        <h3>{{$service->title}}</h3>
        <p>{{$address->address}}</p>
        <h3>ویژگی های بارز</h3>
        <ul>
            <li>کیفیت در خدمات</li>
            <li>بدون معطلی</li>
            <li>محیطی کاملا امن</li>
            <li>اعتماد مشتریان</li>
        </ul>
    </div>

</div>
@endsection