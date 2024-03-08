@extends('new-front.index')
@section('content')
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
                            <td>شماره تماس رزرو کننده</td>
                            <td>ساعت</td>
                            <td>تاریخ</td>
                        </tr>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$service->worker}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$turn->time}}</td>
                            <td>{{$date}}</td>
                        </tr>
                    </tbody>
                </table>
                <button>بازگشت به صفحه ی اصلی</button>
            </div>
        </div>
    </div>
</div>
@endsection