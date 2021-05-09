@php
    $service = App\Models\Services::take(6)->get();
@endphp

<div class="services">

    <div class="container">

        <div class="section_title text-center">
            <h3><img src="/Fronted/img/heading_icon_white.png">
                <br />
                {{trans('nedal.our_services')}}</h3>

        </div>

        <div class="col-md-12">

            <div class="row">
                @foreach($service as $row)
                <div class="col-md-4">
                    <div class="home__services">
                        <div class="icon"> <img src="/images/Services/{{$row->logo}}"></div>
                    @if(getLang() == 'ar')
                            <div class="details">  <div class=""><h5> {{$row->service_name}}</h5></div>  </div>    </div>
                    @else
                            <div class="home__services">
                        <div class="details">  <div class=""><h5>{{$row->service_name_en}}</h5></div>  </div> </div>
                    @endif
                </div>
                @endforeach

            </div>

            </div>




            <button class="btn-primary"> <a  href="{{route('services.allServices')}}"><i class="fas fa-plus" aria-hidden="true"></i>
                {{trans('nedal.more')}} </a> </button>





        </div>
    </div>


