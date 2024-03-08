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
                            <td>شماره روررو</td>
                            <td>نام سرویس</td>
                            <td>شماره تماس رزرو کننده</td>
                            <td>ساعت</td>
                            <td>تاریخ</td>
                        </tr>
                        @foreach($services as $service)
                        <tr>
                            @php
                            $address=$service->address()->first();
                            @endphp
                            <td>{{$service->name}}</td>
                            <td>{{$service->worker}}</td>
                            <td>{{$address->address}}</td>
                           
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