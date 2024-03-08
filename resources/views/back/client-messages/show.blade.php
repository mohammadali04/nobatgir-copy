@extends('back.index')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">صفحه ی مشاهده پیام کاربر</h4>
                  <p class="card-description bg-light">
                    {{$message->message}}
                  </p>
                  <a href="{{Route('admin.message.index')}}" class="btn btn-primary" style="">بازگشت به صفحه اصلی</a>
                </div>
              </div>
            </div>
@endsection