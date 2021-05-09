<header>

    <div class="container">


        <div class="logo"><a href="#">   <img src="/Fronted/img/logo.png" ></a></div>

    </div>
    <div class="menu">
        <div class="container">

            <nav class="navbar navbar-expand-md  justify-content-center theme_bg color_white ">
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                    <span class="navbar-toggler-icon"><i class="fas fa-grip-lines"></i></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">{{trans('main.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('General.about')}}"> {{trans('nedal.about_office')}}  </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{route('services.allServices')}}"> {{trans('nedal.serv')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.allBlogs')}}"> {{trans('nedal.legal_advice')}}  </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{route('consults.requestConsults')}}">{{trans('nedal.legal_consult')}}  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact_us.contact_us')}}">{{trans('nedal.contact_us')}}  </a>
                        </li>


                    </ul>

                </div>

            </nav>




        </div>

    </div>
</header>