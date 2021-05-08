@php
    $service = App\Models\Services::take(6)->get();
@endphp
<div class="services">
    <div class="container">
        <div class="row header_services">
            <div class="col-md-12">
                <img src="/Fronted/images/logoW.png">
                <h3> {{trans('nedal.our_services')}}</h3>
            </div>
        </div>
        @foreach($service as $row)
            <a href="{{route('service.singleService',$row->id)}}">
                <div class="col-md-4">
                    <div class="service_item">
                        <img src="/images/Services/{{$row->logo}}">
                        @if(getLang() == 'ar')
                            <h4>{{$row->service_name}}</h4>
                        @else
                            <h4>{{$row->service_name_en}}</h4>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>