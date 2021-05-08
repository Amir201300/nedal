@extends('Fronted.layouts.master')

@section('title')
    @if(getLang() == 'ar')
        {{$blog->service_name}}
    @else
        {{$blog->service_name_en}}
    @endif
@endsection

@section('content')
    <div class="image_section">
        <div class="section_background">
            <div class="img_background" >
                <img style="width: 741px ;height: 465px" src="/images/Services/{{$blog->logo}}" >
            </div>
        </div>
    </div>
    <div class="content_section container">
        <div class="row">
            @if(getLang() == 'ar')
                <div class="col-md-12">
                    <div class="col-md-6"><h1>{{$blog->service_name}}</h1></div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="col-md-6"><h1>{{$blog->service_name_en}}</h1></div>
                </div>
            @endif
            @if(getLang() == 'ar')
                <p>{!!  $blog->about_service!!}</p>
            @else
                <p>{!!$blog->about_service_en!!}</p>
            @endif
        </div>
    </div>
@endsection
