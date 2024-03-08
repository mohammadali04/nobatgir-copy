@extends('back.index')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card" id="option-content">
        <div class="card-body">
            <h4 class="card-title">صفحه ی افزودن گزینه</h4>
            <p class="card-description">

            </p>
            <form id="option-form" class="forms-sample" action="{{Route('admin.update.option',$option->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">گزینه</label>
                    <textarea class="form-control" name="option"
                        class="option-value form-control">{{$option->option}}</textarea>
                </div>
                <button class="btn btn-primary me-2" type="submit">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
