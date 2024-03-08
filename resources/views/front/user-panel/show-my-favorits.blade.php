@extends('front.main-index')
@section('content')
<style>
#content {
    width: 98%;
    height: auto;
    float: right;
    border: 1px solid;
    padding: 10px;
}

#content ul {
    width: 100%;
    margin: 0;
    padding: 0;
    float: right;
}

#content ul li {
    float: right;
    width: 100%;
    margin: 0;
    padding: 0;
}
</style>
<div id="content">
    <div class="row">
        <ul>
            @foreach($myFavorits as $row)
            <li>
                <label>
                    نام سرویس:
                </label>
                <label>
                    {{$row->title}}
                </label>
                <label>
                    آدرس:
                </label>
                <label>
                    
                    {{strip_tags($row->address->address)}}
                </label>
                <img src="{{$row->img}}">

                <a class="discard-turn" href="{{Route('custommer.discard.favorite',$row->id)}}">
حذف از علاقه مندی ها
</a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection