@extends('new-front.index')
@section('content')
<form action="{{Route('update.day.time',$turn->id)}}" method="POST">
    @csrf

    <div class="col-lg-12 stretch-card"  style="margin:50px 0">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            بازه ی زمانی
                          </th>
                          <th>
                           ورودی
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td>
                          <input type="text" name="time" value="{{$turn->time}}">
                          </td>
                          <td>
                          <button>ویرایش</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </form>
@endsection