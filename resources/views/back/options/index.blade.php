@extends('back.index')
@section('content')
<div class="main-panel">
    <div class="row flex-grow">
        <div class="col-10 grid-margin stretch-card">
            <div class="card card-rounded">
                <div class="card-body">
                @include('layouts.messages')
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                            <h4 class="card-title card-title-dash">صفحه مدیریت گزینه ها</h4>
                        </div>
                        <div>
                            <a href="{{Route('admin.add.option')}}" type="button"
                                class="btn btn-primary btn-lg text-white mb-0 me-0"><i
                                    class="mdi mdi-account-plus"></i>افزودن گزینه ی جدید</a>
                            <a onclick="submitForm()" type="button"
                                class="btn btn-primary btn-lg text-white mb-0 me-0"><i
                                    class="mdi mdi-account-plus"></i>حذف</a>
                        </div>
                    </div>

                    <div class="table-responsive  mt-1">
                        <style>
                            .item-img{
                                width:50px;
                                height:50px;
                            }
                            </style>
                        <table class="table select-table">
                            <thead>
                                <tr>
                                    </th>
                                    <th>ردیف</th>
                                    <th>مفدار</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <form action="{{Route('admin.destroy.option')}}" method="get">
                                    @csrf
                                    @foreach($options as $option)
                                    <tr>
                                        <td>
                                            {{$option->id}}
                                        </td>
                                        <td>
                                        {{mb_substr(strip_tags($option->option),0,50).'...'}}
                                        </td>
                                        <td><a href="{{Route('admin.edit.option',$option->id)}}">ویرایش</a></td>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="ids[]" value="{{$option->id}}"
                                                        aria-checked="false" class="form-check-input"><i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('back.footer')
    <!-- partial -->
</div>
@endsection
<script>
function submitForm() {
    $('form').submit();
}
</script>