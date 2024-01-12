@php
    $current_route=request()-> route()->getName()
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle')</title>
        <link rel="icon" type="image/x-icon" href="/assets/custom/images/favicon.png">
    
        <!-- animate.css-->
        <link href="/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
        <!-- Load Screen -->
        <link href="/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- Font Awesome 5 -->
        <link href="/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
        <!-- Fables Icons -->
        <link href="/assets/custom/css/fables-icons.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
        <!-- portfolio filter gallery -->
        <link href="/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
        <!-- FANCY BOX -->
        <link href="/assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
        <!-- TIMELINE-->
        <link rel="stylesheet" href="/assets/vendor/timeline/timeline.css">
        <!-- OWL CAROUSEL  -->
        <link href="/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
        <link href="/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
        <!-- FABLES CUSTOM CSS FILE -->
        <link href="/assets/custom/css/custom.css" rel="stylesheet">
        <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
        <link href="/assets/custom/css/custom-responsive.css" rel="stylesheet">

        <!-- Google Tag Manager Adsense -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2600828246066398"
             crossorigin="anonymous"></script>
        <meta name="google-adsense-account" content="ca-pub-2600828246066398">
        <!-- End Google Tag Manager Adsense -->
        
        <!-- Google Tag Manager analytics -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NCSDVV4G');</script>
        <!-- End Google Tag Manager analytics -->
         <!-- Google tag (gtag.js) analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1P12FHHYRW"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-1P12FHHYRW');
        </script>
        
        @livewireStyles()
</head>
<body>
    @php
        $setting = \App\Models\Setting::find(1);
    @endphp
    <div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Recherche..." />
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Loading Screen 
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>
-->
<!-- Start Top Header -->
<div class="fables-forth-background-color fables-top-header-signin">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-2 col-lg-5">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="dropdown-item white-color font-13 fables-second-hover-color {{ App::getLocale() == 'en' ? 'd-none' : '' }}" href="#">
                        <img src="/assets/custom/images/France.png" alt="england flag" class="mr-1">French
                    </a>
                    <a class="dropdown-item white-color font-13 fables-second-hover-color {{ App::getLocale() == 'fr' ? 'd-none' : '' }}" href="#">
                        <img src="/assets/custom/images/england.png" alt="england flag" class="mr-1">English
                    </a>
                  </button>
                  <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                    <a class="dropdown-item white-color font-13 fables-second-hover-color {{ App::getLocale() == 'fr' ? 'd-none' : '' }}" href="/change?lang=fr">
                        <img src="/assets/custom/images/France.png" alt="england flag" class="mr-1"> French</a>
                    <a class="dropdown-item white-color font-13 fables-second-hover-color {{ App::getLocale() == 'en' ? 'd-none' : '' }}" href="/change?lang=en">
                        <img src="/assets/custom/images/england.png" alt="england flag" class="mr-1"> English</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-sm-5 col-lg-4 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone :  {{$setting->number1}} - {{$setting->number2}}</p>
            </div>
            <div class="col-12 col-sm-5 col-lg-3 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span><a href="mailto:{{$setting->email}}">Email: {{$setting->email}}</a></p>
            </div>
        </div>
    </div>
</div>
<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0" id="navbar_top">
    <div class="container">
        <div class="row" style="background-color: #2C3E4F">
           <div class="col-12 col-md-10 col-lg-9 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
                    <a class="navbar-brand pl-0" href="/">
                        <img src="{{$setting->logo}}" alt="{{$setting->logo}}" width="150" height="37">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">
                       <ul class="navbar-nav mx-auto fables-nav">
                            <li class="nav-item mt-2 {{$current_route=='accueil'?'active':''}}">
                                <a class="nav-link" href="{{route('accueil')}}" id="sub-nav1">
                                    {{ __('messages.accueil') }}
                                </a>
                            </li>
                            <li class="nav-item mt-2 {{$current_route=='nos_realisations'?'active':''}}">
                                <a class="nav-link" href="{{route('nos_realisations')}}" id="sub-nav1">
                                    {{ __('messages.realisations') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown mt-2">
                                <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('messages.services') }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="sub-nav2">
                                    <li class="{{$current_route=='ingenierie-logicielle'?'active':''}}"><a class="dropdown-item" href="{{route('ingenierie-logicielle')}}">{{ __('messages.lg') }}</a></li>
                                    <li class="{{$current_route=='marketing-digital'?'active':''}}"><a class="dropdown-item" href="{{route('marketing-digital')}}">{{ __('messages.md') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mt-2 {{$current_route=='a_propos'?'active':''}}">
                                <a class="nav-link" href="{{route('a_propos')}}" id="sub-nav1">
                                    {{ __('messages.apropos') }}
                                </a>
                            </li>
                            <li class="nav-item mt-2 {{$current_route=='contactez_nous'?'active':''}}">
                                <a class="nav-link" href="{{route('contactez_nous')}}" id="sub-nav1">
                                    {{ __('messages.contact') }}
                                </a>
                            </li>
                            <li class="nav-item mt-2 {{$current_route=='blog'?'active':''}}">
                                <a class="nav-link" href="{{route('blog')}}" id="sub-nav1">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
           </div>
        </div>
    </div>
</div>
<!-- /End Fables Navigation -->

@yield('content')

<button onclick="topFunction()" id="myBtn_phone" title="Go to top" class="fables-second-background-color"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="fables-second-background-color"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

<span id="flag_mobile">
    <a class="btn dropdown-toggle" href="#" id="dropdownButtonFlag" data-toggle="dropdown">
        <img src="/assets/custom/images/France.png" alt="england flag" class="{{ App::getLocale() == 'en' ? 'd-none' : '' }}" width="35" height="35" style="border-radius: 255px;">
        <img src="/assets/custom/images/england.png" alt="england flag" class="{{ App::getLocale() == 'fr' ? 'd-none' : '' }}" width="35" height="35" style="border-radius: 255px;">
    </a>
    <span class="dropdown-menu" aria-labelledby="dropdownButtonFlag" style="border-radius: 255px;">
        <a class="dropdown-item {{ App::getLocale() == 'fr' ? 'd-none' : '' }}" href="/change?lang=fr">
            <img src="/assets/custom/images/France.png" alt="england flag" class="mr-1">French</a>
        <a class="dropdown-item {{ App::getLocale() == 'en' ? 'd-none' : '' }}" href="/change?lang=en">
            <img src="/assets/custom/images/england.png" alt="england flag" class="mr-1">English</a>
    </span>
</span>

<style>
    @media only screen and (min-width: 768px) {
        #myBtn_phone{
        display: none;
        }
        #dropdownButtonFlag{
        display: none;
        }
        #fmobile{
        display: none;
        }
    }
    @media only screen and (max-width: 768px) {
        #myBtn{
        display: none;
        }
        #fdesktop{
        display: none;
        }
    }
    /* Scroll To Top Button */
    #myBtn {
      display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
       /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */
      
      color: white; /* Text color */
      cursor: pointer; /* Add a mouse pointer on hover */
      padding: 15px; /* Some padding */
      border-radius: 255px; /* Rounded corners */
      font-size: 14px; /* Increase font size */
    }
    #myBtn:hover {
      background-color: #143b70; /* Add a dark-grey background on hover */
    }
    #flag_mobile {
      display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 100px; /* Place the button at the bottom of the page */
      right: 5px; /* Place the button 30px from the right */
      z-index: 100; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */
      cursor: pointer; /* Add a mouse pointer on hover */
      border-radius: 255px; /* Rounded corners */
      font-size: 14px; /* Increase font size */
      margin-right:13px;
    }
    #myBtn_phone {
      display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 50px; /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */
      
      color: white; /* Text color */
      cursor: pointer; /* Add a mouse pointer on hover */
      padding: 15px; /* Some padding */
      border-radius: 255px; /* Rounded corners */
      font-size: 14px; /* Increase font size */
    }
    #myBtn_phone:hover {
      background-color: #143b70; /* Add a dark-grey background on hover */
    }
    /* End Scroll To Top Button */
</style>
<!-- Start Footer 2 Background Image  -->
<div class="fables-footer-image-mobile fables-after-overlay white-color py-4 py-lg-5 bg-rules" id="fmobile"> 
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                @livewire('newsletters')
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="/" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="{{$setting->logo}}" alt="{{$setting->logo}}" width="150" height="37"></a>
                <p class="font-15 fables-third-text-color text-justify">
                   {{ __('messages.footer_text1') }}
                </p>
                <p class="font-15 fables-third-text-color mt-3 text-justify">
                   {{ __('messages.footer_text2') }}
                </p>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">{{ __('messages.footer_title_address') }}</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> {{ __('messages.footer_address') }} </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{ __('messages.footer_address_title') }}</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> {{ __('messages.footer_phone') }} </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+221 77 361 69 69</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> E-Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">info.iconedev@gmail.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">MENU</h2>
                <ul class="nav fables-footer-links">
                    <li><a href="{{route('a_propos')}}" style="text-decoration: none;"> {{ __('messages.apropos') }}</a></li>
                    <li><a href="{{route('contactez_nous')}}" style="text-decoration: none;">{{ __('messages.contact') }}</a></li>
                    <li><a href="{{route('blog')}}" style="text-decoration: none;">Tech Actu</a></li>
                    <li><a href="{{route('nos_realisations')}}" style="text-decoration: none;">{{ __('messages.realisations') }}</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules" id="fdesktop"> 
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                @livewire('newsletters')
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="/" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="{{$setting->logo}}" alt="{{$setting->logo}}" width="150" height="37"></a>
                <p class="font-15 fables-third-text-color text-justify">
                   {{ __('messages.footer_text1') }}
                </p>
                <p class="font-15 fables-third-text-color mt-3 text-justify">
                   {{ __('messages.footer_text2') }}
                </p>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 text-center">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">{{ __('messages.footer_title_address') }}</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> {{ __('messages.footer_address') }}</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{ __('messages.footer_address_title') }}</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> {{ __('messages.footer_phone') }} </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+221 77 361 69 69</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> E-Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">info.iconedev@gmail.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">MENU</h2>
                <ul class="nav fables-footer-links">
                    <li><a href="{{route('a_propos')}}" style="text-decoration: none;"> {{ __('messages.apropos') }}</a></li>
                    <li><a href="{{route('contactez_nous')}}" style="text-decoration: none;">{{ __('messages.contact') }}</a></li>
                    <li><a href="{{route('blog')}}" style="text-decoration: none;">Tech Actu</a></li>
                    <li><a href="{{route('nos_realisations')}}" style="text-decoration: none;">{{ __('messages.realisations') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copyright fables-main-background-color mt-0 border-0 white-color">
    <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
        <li><a href="https://www.facebook.com/GroupeIconeDev" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/iconedev/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <p class="mb-0">© 2023 Tous droits réservés - <a href="{{ route('admin.dashboard') }}" rel="noopener noreferrer">Iconedev</a></p>
</div>

@livewireScripts()

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                 document.getElementById('navbar_top').classList.remove('fixed-top');
                 // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
    // DOMContentLoaded  end
    
     /* Scroll To Top Button */
        // Get the button:
        let mybutton = document.getElementById("myBtn");
        let mybutton_phone = document.getElementById("myBtn_phone");
        let mybutton_flag = document.getElementById("flag_mobile");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            mybutton_phone.style.display = "block";
            mybutton_flag.style.display = "block";
          } else {
            mybutton.style.display = "none";
            mybutton_phone.style.display = "none";
            mybutton_flag.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6541824ea84dd54dc4874a7e/1he3ua19i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- /End Footer 2 Background Image -->
<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="/assets/vendor/popper/popper.min.js"></script>
<script src="/assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="/assets/vendor/timeline/jquery.timelify.js"></script>
<script src="/assets/vendor/timeline/timeline.js"></script>
<script src="/assets/vendor/timeline/modernizr.js"></script>
<script src="/assets/custom/js/custom.js"></script>
<script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
<!-- Google Tag Manager analytics (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCSDVV4G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manage analyticsr (noscript) -->
</body>
</html>
