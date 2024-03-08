@extends('front3.index')
@section('content')
<div class="container">
<div class="col-lg-10 grid-margin stretch-card" style="margin:100px;text-align:rtl">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">مشخصات نوبت</h4>
            <div class="table-responsive">
                <table class="table" style="border:1px solid">
                    <tbody>
                        <tr>
                            <td>نام رزرو کننده</td>
                            <td>نام سرویس</td>
                            <td>نام ارائه کننده خدمات</td>
                            <td>ساعت</td>
                            <td>تاریخ</td>
                        </tr>
                        @foreach($turns as $turn)
                        <tr>
                            <td>{{$turn->name}}</td>
                            <td>{{$turn->service->title}}</td>
                            <td>{{$turn->service->worker}}</td>
                            <td>{{$turn->time}}</td>
                            <td>{{$turn->date}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn-primary" href="{{Route('index')}}">بازگشت به صفحه ی اصلی</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection