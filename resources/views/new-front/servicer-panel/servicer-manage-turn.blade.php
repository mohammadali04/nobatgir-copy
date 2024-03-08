@extends('new-front.index')
@section('content')
<form action="{{Route('servicer.store.table')}}" method="POST">
    @csrf

    <div class="col-lg-12 stretch-card" style="margin:50px 0">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    ردیف
                                </th>
                                <th>
                                    روز
                                </th>
                                <th>
                                    مشاهده ساعت ها
                                </th>
                                <th>
                                    ویرایش
                                </th>
                                <th>
                                    انتخاب
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($turns as $turn)
                            @php
                            $x='';
                            @endphp
                            @switch($turn->day_id)
                            @case (1)
                            @php
                            $x='شنبه';
                            @endphp
                            @break
                            @case (2)
                            @php
                            $x='یکشنبه';
                            @endphp
                            @break
                            @case (3)
                            @php
                            $x='دوشنبه';
                            @endphp
                            @break
                            @case (4)
                            @php
                            $x='سه شنبه';
                            @endphp
                            @break
                            @case (5)
                            @php
                            $x='چهار شنبه';
                            @endphp
                            @break
                            @case (6)
                            @php
                            $x='پنج شنبه';
                            @endphp
                            @break
                            @case (7)
                            @php
                            $x='جمعه';
                            @endphp
                            @break
                            @endswitch
                            <tr class="table-info">
                                <td>
                                    {{$turn->id}}
                                </td>
                                <td>
                                    {{$x}}
                                </td>
                                <td>
                                    <a href="{{Route('show.day.hours',$turn->id)}}">مشاهده</a>

                                </td>
                                <td>
                                    <a>ویرایش</a>
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection