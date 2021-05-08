<div class="header">
    <div class="nav-top">
        <div class="container-fluid topHeader">
            <div class="row">
                <div class="hidden-xs col-sm-6 col-md-6 ">
                </div>

                <div class=" col-sm-6 col-md-6 ">
                    <ul class="list-style-none">
                        <li class="left"><span>{{contact_us()->phone}}</span> <img src="/Fronted/images/icons/call.png"> </li>
                        <li class="left"> <span>{{contact_us()->email}}</span><img src="/Fronted/images/icons/envelope.png"> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="logo">
                <a class="navbar" href="/">
                    <img class="retina" src="/Fronted/images/logo.png" alt="logo">
                    <h3>مكتب نضال عطا محامون و مستشارون قانونيون</h3>
                    <p>{{trans('nedal.LAWYERS_AND_LEGAL_CONSULTANTS')}}</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="headerMain">
                    <ul class="main">
                        <li ><a style="font-size: 15px" href="/">{{trans('main.home')}}</a></li>
                        <li ><a style="font-size: 15px" href="{{route('General.about')}}">{{trans('nedal.about_office')}} </a></li>
                        <li ><a style="font-size: 15px" href="/">{{trans('nedal.our_services')}}</a></li>
                        <li ><a style="font-size: 15px" href="{{route('blog.allBlogs')}}">{{trans('nedal.legal_advice')}}</a></li>
                        <li ><a style="font-size: 15px" href="{{route('contact_us.contact_us')}}"> {{trans('nedal.contact_us')}}</a></li>
                        @if(getLang() =='en')
                            <li ><a style="font-size: 15px;color: red"  href="{{ LaravelLocalization::getLocalizedUrl('ar') }}">العربية</a>
                            </li>
                        @else
                            <li ><a style="font-size: 15px;color: red"  href="{{ LaravelLocalization::getLocalizedUrl('en') }}">English</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
