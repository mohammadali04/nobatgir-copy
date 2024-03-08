@extends('new-front.index')
@section('content')
<style>
.row-list{
    width:200px!important;
    height:200px!important;
    float:right!important;
    margin:15px;
}
    </style>
        <!-- Page Heading/Breadcrumbs -->
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
        <!-- /.row -->
        
        <!-- Project One -->
        @foreach($turns as $turn)
        <div class="row row-list">
            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <h3>{{$turn->name}}</h3>
                <h4>{{$turn->date}}</h4>
                <p>{{$turn->email}}</p>
                <a class="btn btn-primary" href="{{Route('show.user.reserved',$turn->id)}}">مشاهده جزئیات</a>
            </div>
        </div>
        @endforeach
        <!-- /.row -->
        <hr>

        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">«</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">»</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->
@endsection