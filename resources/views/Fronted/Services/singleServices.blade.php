@extends('Fronted.layouts.master')

@section('title')
    @if(getLang() == 'ar')
        {{$Services->service_name}}
    @else
        {{$Services->service_name_en}}
    @endif
@endsection
@section('content')
    <div class="container">
        <div class="page about">

            <div class="row">
                <div class="col-md-9">
                    <div class="text">
                        <h2 class="h3">{{$Services->service_name}}</h2>
                        <p>
                            {{$Services->about_service}}

                        <li>إسداء النصح </li>
                        <li>العمل على إنجاز المعاملات القانونية وصياغات الأوراق التجارية</li>
                        <li>المشاركة في المناقشات والمفاوضات وإسداء النصح وصياغة عقود الوكالات التجارية وعقود التوزيع وعقود الامتياز التجاري </li>
                        <li>تسجيل الاتفاقيات لدى الجهات الرسمية المختصة </li>
                        <li>تقديم النصح بشأن القروض التجارية وصياغة اتفاقياتها </li>
                        <li>صياغة اتفاقيات توريد وبيع السلع والاتفاقيات التجارية المماثلة</li>


                        </p>


                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/Services_image/{{$Services->image}}" class="img-fluid">
                </div>

            </div>



        </div>
    </div>
@endsection