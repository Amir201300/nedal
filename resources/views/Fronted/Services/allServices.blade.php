@extends('Fronted.layouts.master')

@section('title')
    {{trans('nedal.about_office')}}
@endsection

@section('content')
    <div class="container">
        <div class="page about">


            <div class="container">

                <div class="section_title text-center">
                    <h3><img src="/Fronted/img/heading_icon.png">
                        <br />
                        {{trans('nedal.our_services')}} </h3>

                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach($Services as $row)
                        <div class="col-md-4">

                            <div class="home__services">
                                <div class="icon"> <a href="#"> <i class="fas fa-briefcase"></i></a></div>
                                @if(getLang() == 'ar')
                                <div class="details"> <a href="#"> <h5> {{$row->service_name}}</h5></a>
                                    <hr />
                                    <div class="more"> <a href="{{route('services.singleService',$row->id)}}"><i class="fas fa-plus" aria-hidden="true"></i> {{trans('nedal.more_info')}}   </a></div>
                                </div>
                                @else
                                    <div class="details"> <a href="#"> <h5> {{$row->service_name_en}}</h5></a>
                                        <hr />
                                        <div class="more"> <a href="{{route('services.singleService',$row->id)}}"><i class="fas fa-plus" aria-hidden="true"></i>    {{trans('nedal.more_info')}} </a></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection
