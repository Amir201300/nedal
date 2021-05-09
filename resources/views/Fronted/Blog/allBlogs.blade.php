@php
    $blogs=\App\Models\Blog::where('status',1)->first();
@endphp
@extends('Fronted.layouts.master')

@section('title')
    {{trans('nedal.legal_advice')}}

@endsection

@section('content')
    <div class="market">
        <div class="container">


            <div class="section_title text-center">
                <h3><img src="/Fronted/img/heading_icon.png">
                    <br />
                    {{trans('nedal.legal_advice')}} </h3>

            </div>

            <div class="row">

            @foreach($blog as $row)
                <div class="col-md-4">
                    <div class="item">
                        <div class="pic"> <img src="/images/Blog/{{$row->image}}" class="img-fluid" ></div>
                        <div class="title"><h4>{{$row->title}}</h4></div>
                        <div class="clear"></div>
                        <div class="details"> <li><i class="fas fa-calendar-minus"></i>  21/3/2021</li> <li><i class="fas fa-users"></i>  المصاريف والتمويل</li> </div>
                        <div class="clear"></div>

                        <p>{{substr($row->content,0,100)}}</p>


                  <a href="{{route('blog.singleBlog',$row->id)}}"  class="btn-primary"><i class="fas fa-plus"></i> {{trans('nedal.more')}}</a>                  </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>

@endsection

