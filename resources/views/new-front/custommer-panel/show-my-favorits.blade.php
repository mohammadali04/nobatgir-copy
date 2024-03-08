@extends('new-front.index')
@section('content')

<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">One Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">One Column Portfolio</li>
                </ol>
            </div>
        </div>
        @foreach($myFavorites as $favorite)
        <div class="row">
            <div class="col-md-7">
                <a href="">
                    <img class="" style="width:100px;height:100px" src="{{$favorite->img}}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{$favorite->title}}</h3>
                <h4>{{$favorite->worker}}</h4>
                   
                <p>@php
                    echo mb_substr(strip_tags($favorite->detail),0,50,'utf8').'...';
                    @endphp</p>
                <a class="btn btn-primary" href="{{Route('show.service.detail',$favorite->id)}}">بیشتر</a>
            </div>
        </div>
        <hr>
        @endforeach
@endsection