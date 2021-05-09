@extends('Fronted.layouts.master')

@section('title')
    @if(getLang() == 'ar')
    {{$blog->title}}
    @else
        {{$blog->title_en}}
    @endif
@endsection

@section('content')
    <div class="container">
        <div class="page about">

            <div class="row">
                <div class="col-md-9">
                    <div class="text">
                        <h2 class="h3">{{$blog->title}}</h2>
                        <p>
                        {{$blog->content}}

                        </p>


                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/Blog/{{$blog->image}}" class="img-fluid">
                </div>

            </div>



        </div>
    </div>
@endsection
