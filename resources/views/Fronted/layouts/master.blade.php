<html>
@if(getLang() =='en')
    <html lang="en">
    @else
        <html lang="ar">

        @endif
        <head>
            <meta charset="UTF-8">
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <link rel="shortcut icon" href="" type="image/x-icon">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <title> @yield('title') </title>


            <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2" >
            <link rel="stylesheet" href="/Fronted/css/bootstrap.css" >
            <link rel="stylesheet" href="/Fronted/js/bootstrap.js" >
            <link rel="stylesheet" href="/Fronted/fonts/stylesheet.css" >
            <script src="https://kit.fontawesome.com/e0387e9a75.js"></script>
            <link rel="stylesheet" href="/Fronted/css/main.css" >




            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">




            <script src="/Fronted/js/main.js"></script>

            <link rel="stylesheet" href="/Fronted/fonts/stylesheet.css" type="text/css" charset="utf-8" />

            <link href="/Fronted/css/model.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <!----------brandslider---------------->
            <!----slider---->
            <script src="http://code.jquery.com/jquery.js"></script>

            <script src="/Fronted/src/skdslider.min.js"></script>
            <link href="/Fronted/src/skdslider.css" rel="stylesheet">
            <script type="text/javascript">
                jQuery(document).ready(function(){
                    jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'sliding'});
                    jQuery('#demo2').skdslider({'delay':5000, 'animationSpeed': 1000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'sliding'});
                    jQuery('#demo3').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

                    jQuery('#responsive').change(function(){
                        $('#responsive_wrapper').width(jQuery(this).val());
                    });

                });
            </script>

            <!----slider---->

            <link href="/Fronted/css/style.css" rel="stylesheet" type="text/css" />
            <script type="text/javascript" src="/Fronted/js/jquery.flexisel.js"></script>




        </head>
<body>

<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="contact-head">
                    <a href="tel:22408681"> <i class="fab fa-whatsapp"></i> <span>{{contact_us()->phone}}</span> </a>

                    <a href = "mailto:saif.jader.ku.@gmail.com"> <i class="far fa-envelope"></i>  <span>{{contact_us()->email}}</span></a>


                    <div class="english"><a href="#"> <i class="fas fa-globe"></i> ENGLISH  </a>   </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="social">
                    <ul>
                        <li> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                        <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>


                        <li> <a href="#"> <i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                        <li> <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>

@include('Fronted.layouts.header')

@yield('content')

@include('Fronted.layouts.footer')

<a class="to-top" href="/">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>

@yield('script')

<!--Common JS Plugin-->
<script>
    $(function() {
        //----- OPEN
        $('[data-popup-open]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

            e.preventDefault();
        });

        //----- CLOSE
        $('[data-popup-close]').on('click', function(e)  {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

            e.preventDefault();
        });
    });
</script>


<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <div class="video-container"><iframe width="100%"  src="https://www.youtube.com/embed/w-ZrFGBtNgE " frameborder="0" allowfullscreen ></iframe>
        </div>

        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>

    </div>

</div>




<script src="/Fronted/js/popper.min.js"></script>
<script src="/Fronted/js/bootstrap.min.js"></script>
<!----slider---->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-3415878-12', 'dandywebsolution.com');
    ga('send', 'pageview');

</script>
<!----slider---->




<script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel();
        $("#flexiselDemo2").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo3").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo4").flexisel({
            clone:false
        });

    });
</script>

@yield('script')
</body>
</html>


