@extends('Fronted.layouts.master')

@section('title')
    {{trans('nedal.about_office')}}
@endsection

@section('content')

    <div class="container">
        <div class="page about">

            <div class="row">
                <div class="col-md-9">
                    <div class="text">
                        <h2 class="h3">{{trans('nedal.welcome')}}</h2>

                        <br />
                       @if(getLang() == 'ar')
                        <p>
                        {{about()->about_office}}
                        </p>
                        @else
                            <p>
                                {{about()->about_office_en}}
                            </p>
                        @endif
                        <h2 class="h3">{{trans('nedal.our_vision')}} </h2>

                        <br />
                        @if(getLang() == 'ar')
                        <p>{{about()->our_vision}}</p>
                        @else
                            <p>{{about()->our_vision_en}}</p>
                            @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/about/{{about()->image}}" class="img-fluid">
                </div>

            </div>



            <div class="row nedal">
                <div class="col-md-3">
                    <img src="/Fronted/img/nedal.png" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <div class="text">
                        <h5 >المحامي والمستشار القانوني /نضال بن محمد بن عطا</h5>

                        <br />
                        <li>محامي معتمد من وزراة العدل السعودية</li>
                        <li>محكم معتمد من وزراة العدل السعودية</li>
                        <li>موثق معتمد من وزراة العدل السعودية</li>
                        <li>خبير ادارة ازمات قانونية وحوكمة الشركات</li>
                        <li>عضو الهيئة السعودية للمحامين</li>
                        <li>    عضو الاتحاد الدولي للمحامين</li>


                    </div>
                </div>


            </div>


        </div>
    </div>

@endsection