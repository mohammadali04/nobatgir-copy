@extends('new-front.index')
@section('content')
<div class="col-md-6 grid-margin stretch-card" style="float:right;margin:40px">
              <div class="card">
                <div class="card-body">
                  <h class="card-title" style="margin:20px 0">فرم ثبت اطلاعات ارائه دهنده خدمات</h>
                  <p class="card-description" style="margin:20px 0">
                    اطلاعات خود را وارد کنید
                  </p>
                  <form class="forms-sample" action="{{Route('servicer.store.info')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">نام صاحب سرویس</label>
                      <input type="text" class="form-control" name="worker"  placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">عنوان سرویس</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">آدرس</label>
                      <textarea type="text" class="form-control" name="address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">تصویر</label>
                      <input type="text" class="form-control" name="img">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">توضیحات</label>
                      <textarea type="text" class="form-control" name="detail"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@endsection