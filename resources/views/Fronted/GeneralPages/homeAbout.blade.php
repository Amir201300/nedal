<div class="overview">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="overview"><img src="/images/about/{{about()->image}}" class="img-fluid"></div>
            </div>
            <div class="col-md-8">
                <div class="text">
                    <h3><span><img src="/Fronted/img/heading_icon.png"></span>{{trans('nedal.welcome')}} </h3>

                    @if(getLang() =='ar')
                        <p>{{(about()->about_office)}}</p>
                    @else
                        <p>{{substr(about()->about_office_en,0,300)}}</p>
                    @endif
                    <div >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




