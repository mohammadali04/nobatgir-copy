@extends('front3.index')
@section('content')
<div class="container container-fluid bg-light" style="padding:15px;direction:ltr">
@include('layouts.messages')
    <div class="row">
        <div id="content" class="col-lg-8 col-md-9 col-md-6 col-xs-12 grid-margin stretch-card pull-left" style="direction:rtl">
            <div class="card">
                <div class="card-body">
                    <h class="card-title" style="margin:20px 0">فرم ثبت اطلاعات ارائه دهنده خدمات</h>
                    <p class="card-description" style="margin:20px 0">
                        اطلاعات خود را وارد کنید
                    </p>
                    <form action="{{Route('servicer.update.info',$service->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInput">دسته ها</label>
                           <select name="category_id">
                            دسته ها
                            @foreach($categories as $category)
                                        <option class="dropdown-item" @php if($service->category_id==$category->id){ echo 'selected';} @endphp value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">نام صاحب سرویس</label>
                            <input type="text" class="form-control" name="worker" value="{{$service->worker}}"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">شماره تماس</label>
                            <input type="text" class="form-control" name="phone"  value="{{$service->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">عنوان سرویس</label>
                            <input type="text" class="form-control" name="title" value="{{$service->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">آدرس</label>
                            <textarea type="text" class="form-control" name="address">{{$address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">تصویر</label>
                            <input type="text" class="form-control" name="img" value="{{$service->img}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">توضیحات</label>
                            <textarea type="text" class="form-control" name="detail">{{$service->detail}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">ارسال</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        @include('front3.servicer-panel.sidebar')
    </div>
</div>
@endsection