@extends('new-front.index')
@section('content')
<style>
.row .parent-favorite-icone{
    position:relative;
}
.row .child-favorite-icone{
    position:absolute;
    width:25px;
    height:25px;
    background:url('/images/slices.png') no-repeat scroll -1095px -499px;
    bottom:0;
    left:0;
    display:block;
}
.row .child-favorite-icone.active{
    background:url('/images/slices.png') no-repeat scroll -1095px -539px;
}
    </style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Services
            <small>Subheading</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a>
            </li>
            <li class="active">Services</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Services Panels</h2>
    </div>
    @foreach($services as $service)
    <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center" class="">
            <div class="panel-heading">
                <img src="{{$service->img}}" class="fa-stack fa-5x">

            </div>
            <div class="panel-body parent-favorite-icone">
                <h4>{{$service->title}}</h4>
                <p>@php
                    echo mb_substr(strip_tags($service->detail),0,50,'utf8').'...';
                    @endphp
                </p>
                <a href="{{Route('show.service.detail',$service->id)}}" class="btn btn-primary">بیشتر</a>
                <i class="child-favorite-icone @php if($service->active==1){echo 'active';} @endphp" class=""></i>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div style="text-align:center" class="row"> {{$services->links()}}</div>
@endsection