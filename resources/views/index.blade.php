@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Accueil')
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="title" content="Un savoir-faire unique, des solutions logicielles exceptionnelles : faites confiance aux experts du code."/>
    <meta name="description" content="ICONEDEV est une entreprise informatique basée à Dakar qui a pour vocation de créer et d’aider à créer des solutions numériques (applications web et mobile) sur mesures pour les petites et moyennes entreprises."/>
    <meta name="keywords" content="Innovation technologique en développement d'applications, Maintenance d'applications, UX/UI design d'applications, Conception d'applications, Développement d'applications, Sociétés d'informatique, sociétés d'informatique Sénégal, Développement logiciel et programmation informatique, liste des entreprises informatique au sénégal, Entreprise informatique,Entreprise informatique au Sénégal,Meilleure Entreprise informatique au Sénégal,Meilleures Entreprises informatique au Sénégal,Entreprise informatique à Dakar,Startup,Startup Technologique,Startup Technologique au Sénégal, Application web, application mobile, Application desktop/Bureau, android, OS, innovation, tech, algorithme, génie logiciel , informatique , Software, Logiciel, progiciel, gestion commerciale, maintenance logiciel, Réferencement SEO, Site web, site web sur mesure, développeur, backend, frontend, java, laravel, php, mysql, spring boot,docker, jenkins."/>
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="@Iconedev"/>
    
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:title" content="Un savoir-faire unique, des solutions logicielles exceptionnelles : faites confiance aux experts du code."/>
    <meta property="og:description" content="ICONEDEV est une entreprise informatique basée à Dakar qui a pour vocation de créer et d’aider à créer des solutions numériques (applications web et mobile) sur mesures pour les petites et moyennes entreprises." />
    <meta property="og:image" itemprop="image" content="./assets/custom/images/iconedev_s.jpg"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://iconedev.com/"/>
    

    <meta rel="canonical" href="https://iconedev.com/"/>
    <meta name="twitter:domain" content="iconedev.com"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" property="og:title" itemprop="name" content="Iconedev"/>
    <meta name="twitter:description" property="og:description" itemprop="description" content="Nous avons le code dans notre ADN : une startup de développement logiciel taillée pour le succès."/>
    <meta name="twitter:image" content="./assets/custom/images/iconedev_s.jpg"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
@section('content')
@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!-- Start Header  fables-header fables-after-overlay overlay-lighter   -->
<div class="bg-rules h-100" style="background-image: url({{$setting->bg}});" id="desktop_sld">
    <div class="container overflow-hidden">  
        <div class="owl-carousel owl-theme default-carousel fables-sqr-nav dots-0 wow fadeInUpBig" data-wow-duration="2s">
            <div>
                <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                    {{ __('messages.sub_title') }}💻⚛️
                </p>
                <h1 class="white-color bold-font mt-lg-5 mb-5"> {{ __('messages.title1') }}<br> 
                    <span class="fables-second-text-color">{{ __('messages.title2') }}</span>
                </h1>  
                <a href="#services" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover white-color-hover">{{ __('messages.btn_our_service') }}</a>
                <a href="{{route('contactez_nous')}}" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">{{ __('messages.text_contact_btn') }}</a>
            </div> 
            <div>
                <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                    {{ __('messages.sub_title') }}💻⚛️
                </p>
                <h1 class="white-color bold-font mt-lg-5 mb-5"> {{ __('messages.title1_1') }}<br> 
                 <span class="fables-second-text-color">{{ __('messages.title2_2') }}</span>
                </h1> 
                <a href="#services" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover white-color-hover">{{ __('messages.btn_our_service') }}</a>
                <a href="{{route('contactez_nous')}}" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">{{ __('messages.text_contact_btn') }}</a>  
            </div> 
        </div>
    </div>
</div>
<div class="fables-header fables-after-overlay overlay-lighter bg-rules h-100" style="background-image: url('https://iconedev.com/assets/custom/images/Startup_developpement web et mobile.png')" id="mobile_sld">
    <div class="container overflow-hidden">  
        <div class="owl-carousel owl-theme default-carousel fables-sqr-nav dots-0 wow fadeInUpBig" data-wow-duration="2s">
            <div>
                <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                    {{ __('messages.sub_title') }}💻⚛️
                </p>
                <h1 class="white-color bold-font mt-lg-5 mb-5"> {{ __('messages.title1') }}<br> 
                    <span class="fables-second-text-color">{{ __('messages.title2') }}</span>
                </h1>  
                <a href="#services" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover white-color-hover">{{ __('messages.btn_our_service') }}</a>
                <a href="{{route('contactez_nous')}}" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">{{ __('messages.text_contact_btn') }}</a>
            </div> 
            <div>
                <p class="fables-third-text-color mt-3 mb-5 light-font fables-header-slider-details">
                    {{ __('messages.sub_title') }}💻⚛️
                </p>
                <h1 class="white-color bold-font mt-lg-5 mb-5"> {{ __('messages.title1_1') }}<br> 
                 <span class="fables-second-text-color">{{ __('messages.title2_2') }}</span>
                </h1> 
                <a href="#services" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-md-4 py-2 btn-bg-hover white-color-hover">{{ __('messages.btn_our_service') }}</a>
                <a href="{{route('contactez_nous')}}" class="btn fables-second-border-color white-color rounded-0 px-md-4 py-2 fables-second-hover-background-color">{{ __('messages.text_contact_btn') }}</a>  
            </div> 
        </div>
    </div>
</div>
 <span id="services"></span>
<style>
    @media only screen and (max-width: 768px) {
        #desktop_sld{
        display: none;
        }
    }
    @media only screen and (min-width: 768px) {
        #mobile_sld{
        display: none;
        }
    }
</style>
<style>
    .owl-nav{
        display: none;
    }
</style>
<!-- /End Header -->

<!-- Start Service -->
<div class="container-fluid my-0 my-lg-5">
      <div class="row">
          <div class="col-12 col-lg-2 p-0">
               <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color fables-sqr-rotation-services">
                  <div class="text-rotate">
                       <h2 class="text-white font-25"><br><span class="white-color font-40 bold-font mt-2 d-block">{{ __('messages.title_service') }}</span></h2>
                       <p class="fables-third-text-color mt-4 mb-3 mb-lg-5">
                        {{ __('messages.sub_title_service') }}
                       </p>
                  </div>
               </div>
               
          </div>
          <div class="col-12 col-lg-10 p-0">
              <div class="fables-index-services fables-after-overlay py-md-5 px-3 pr-md-4 pl-md-5 bg-rules sm-index-products mt-lg-0 mt-xl-5">
                   <div class="container z-index position-relative">
                       <div class="row">
                           <div class="col-12 col-lg-10 offset-lg-2">
                                <div class="row">
                                    <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".4s">
                                        <div class="row text-center text-md-left">
                                            <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                <img src="/assets/custom/images/service-icon-00.png" class="" style="margin-left:-16px;">
                                            </div>
                                            <div class="col-12 col-md-9 pl-md-0">
                                                <h2 class="text-white font-19 semi-font mb-2">{{ __('messages.devweb') }}</h2>
                                                <div class="font-14 text-white">
                                                    {{ __('messages.text_devweb') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".8s">
                                        <div class="row text-center text-md-left">
                                            <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                <img src="/assets/custom/images/service-icon-mobile.png" class="" style="margin-left:-16px;">
                                            </div>
                                            <div class="col-12 col-md-9 pl-md-0">
                                               <h2 class="text-white font-19 semi-font mb-2">{{ __('messages.devmobile') }}</h2>
                                               <div class="font-14 text-white">
                                                {{ __('messages.text_devmobile') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.2s">
                                        <div class="row text-center text-md-left">
                                            <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                               <img src="/assets/custom/images/service-icon-04.png" class="" style="margin-left:-16px;">
                                            </div>
                                            <div class="col-12 col-md-9 pl-md-0">
                                               <h2 class="text-white font-19 semi-font mb-2">{{ __('messages.ml') }}</h2>
                                                <div class="font-14 text-white">
                                                   {{ __('messages.text_ml') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.6s">
                                        <div class="row text-center text-md-left">
                                            <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                                <img src="/assets/custom/images/service-icon-03.png" class="" style="margin-left:-16px;">
                                            </div>
                                            <div class="col-12 col-md-9 pl-md-0">
                                                <h2 class="text-white font-19 semi-font mb-2">{{ __('messages.seo') }}</h2>
                                                <div class="font-14 text-white">
                                                    {{ __('messages.text_seo') }}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
              </div>
          </div>
      </div>
  </div>
<!-- End Service -->

<!-- Start why choose us -->
<div class="container-fluid">
   <div class="row mt-3 mt-md-5" id="desktop">
       <div class="col-12 col-lg-5 offset-lg-1 mb-4 mb-lg-0 overflow-hidden">
           <h2 class="fables-second-text-color font-35 bold-font wow fadeInLeft"> {{ __('messages.qui') }} <span class="fables-main-text-color"> {{ __('messages.title_aboutus') }}</span></h2>
           <p class="fables-forth-text-color my-3 wow fadeInLeft text-justify" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 25.12px; color: rgb(0, 0, 0);">
            {{ __('messages.text_aboutus') }}
           </p>
       </div>
       <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
            <div class="choose-img-border-after fables-second-border-color position-relative">
                 <img src="/assets/custom/images/team2.png" alt="" class="w-100">
            </div>
       </div>
    </div>
    <style>
        @media only screen and (min-width: 768px) {
            #mobile{
            display: none;
            }
        }
        @media only screen and (max-width: 768px) {
            #desktop{
            display: none;
            }
        }
    </style>
    <div class="row mt-3 mt-md-5" id="mobile">
        <div class="col-12 col-lg-5 offset-lg-1 p-0 text-right mb-lg-5">
            <div class="choose-img-border-after fables-second-border-color position-relative">
                 <img src="/assets/custom/images/team2.png" alt="" class="w-100">
            </div>
        </div>
        <div class="col-12 col-lg-5 offset-lg-1 mb-4 mb-lg-0 overflow-hidden">
            <h3 class="fables-second-text-color font-34 bold-font wow fadeInLeft"> {{ __('messages.qui') }} <span class="fables-main-text-color"> {{ __('messages.title_aboutus') }}</span></h3>
            <p class="fables-forth-text-color my-3 wow fadeInLeft text-justify">
                {{ __('messages.text_aboutus') }}
            </p>
        </div>

 </div>
</div>
<!-- End why choose us -->

<!-- Start Nos Clients -->
<div class="container">
     <h2 class="fables-main-text-color font-35 font-weight-bold text-center mt-4 mt-lg-5">{{ __('messages.client_title') }}
          <span class="fables-second-text-color">{{ __('messages.client_title1') }}</span></h2>
     <p class="fables-forth-text-color text-center mb-4 mb-lg-5">{{ __('messages.sub_client_title') }}</p>
     <div class="row overflow-hidden">
       <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 wow bounceInDown" data-wow-delay=".4s">
           <div class="table-border-light fables-second-hover-border">
              <div class="bg-wisteria py-4 position-relative">
                  <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6">KANMATY SHOP</h2>
                  <div class="center-number-table border-2 bg-wisteria white-color rounded-circle border-white position-absolute p-4">
                      <img src="/assets/custom/images/kanmaty-logo.png" alt="" srcset="" class="img-fluid">
                  </div>
              </div>
              <div class="bg-white py-4 table-block">
                  <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15">
                    {{ __('messages.txt_kanmaty') }}
                  </p>
                  <a href="https://kanmaty.com/" target="_blank" class="btn bg-wisteria white-color white-color-hover fables-btn-rounded px-5 py-2 font-15">{{ __('messages.btn_client') }}</a>
              </div>
           </div>

       </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4 text-center wow bounceInDown" data-wow-delay=".8s">
           <div class="table-border-light fables-second-hover-border">
              <div class="bg-dark-blue py-4 position-relative">
                  <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6">LMCI</h2>
                  <div class="center-number-table border-2 bg-dark-blue white-color rounded-circle border-white position-absolute p-4">
                    <img src="/assets/custom/images/lmcisn-logo.png" alt="" srcset="" class="img-fluid">
                  </div>
              </div>
              <div class="b-dark-blue py-4 table-block">
                  <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15">
                    {{ __('messages.txt_lmci') }}
                  </p>
                  <a href="https://lmcisn.com/" target="_blank" class="btn bg-dark-blue white-color white-color-hover fables-btn-rounded px-5 py-2 font-15">{{ __('messages.btn_client') }}</a>
              </div>
           </div>

       </div>
        <div class="col-12 col-sm-6 mb-4 col-lg-3 text-center wow bounceInDown" data-wow-delay="1.2s">
           <div class="table-border-light fables-second-hover-border">
              <div class="fables-main-background-color py-4 position-relative">
                  <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6">EVENT 221</h2>
                  <div class="center-number-table border-2 fables-main-background-color white-color rounded-circle border-white position-absolute p-4">
                    <div style="border-radius: 255px;">
                        <img src="/assets/custom/images/logo-event.png" alt="" class="img-fluid">
                    </div>

                  </div>
              </div>
              <div class="bg-white py-4 table-block">
                  <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15">
                    {{ __('messages.txt_event') }}
                  </p>
                  <a href="https://event221.com/" target="_blank" class="btn fables-main-background-color white-color white-color-hover fables-btn-rounded px-5 py-2 font-15">{{ __('messages.btn_client') }}</a>
              </div>
           </div>

       </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4 text-center wow bounceInDown" data-wow-delay="1.6s">
           <div class="table-border-light fables-second-hover-border">
              <div class="fables-second-background-color py-4 position-relative">
                  <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6">Triengineering Sarl</h2>
                  <div class="center-number-table border-2 fables-second-background-color white-color rounded-circle border-white position-absolute p-4">
                    <img src="/assets/custom/images/trie-logo.png" alt="" srcset="" class="img-fluid">
                  </div>
              </div>
              <div class="bg-white py-4 table-block">
                  <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15">
                     {{ __('messages.txt_trie') }}
                  </p>
                  <a href="https://www.triengineering.co/" target="_blank" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2 font-15">{{ __('messages.btn_client') }}</a>
              </div>
           </div>

       </div>
     </div>
 </div>
<!-- End Nos Clients -->

<!-- Start Overlay Caption -->
<div class="fables-testimonial fables-after-overlay bg-rules py-4 py-md-5 mt-lg-5" style="background-image: url(/assets/custom/images/index2-overlay.jpg);">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-lg-8 offset-lg-2 text-center position-relative z-index wow zoomIn" data-wow-duration="1.5s">
                           <h3 class="white-color mb-3 font-25 font-weight-bold">{{ __('messages.cnt0') }}</h3>
                           <p class="z-index font-weight-light text-white fables-third-text-color">
                            {{ __('messages.cnt1') }}
                           </p>
                           <a href="/contactez_nous#contact" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded  mt-4 py-2 px-5 position-relative z-index">{{ __('messages.cnt2') }}</a>
                   </div>
               </div>

           </div>
</div>
<!-- Start Overlay Caption -->

<!-- Start Team -->
<div class="container">
    <div class="fables-team overflow-hidden">
        <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5"><code><</code> {{ __('messages.equipe') }} <code>/></code></h2>
        <div class="row container justify-content-center">
            <div class="col-6 col-md-3 col-sm-12 col-xs-12 wow fadeInDown mb-3" data-wow-delay=".3s">
                <div class="card fables-team-block fables-second-hover-text-color">
                  <div class="image-container shine-effect">
                      <a href="#"><img class="w-100" src="/assets/custom/images/fall.png" alt="Iconedev Template"></a>
                  </div>
                  <div class="card-body">
                    <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">MOUSTAPHA FALL</a></h5>
                    <p class="font-13 fables-fifth-text-color italic my-2">Dev FullStack</p>
                    <ul class="nav fables-team-social-links">
                        <li><a href="https://www.linkedin.com/in/mouhamadou-moustapha-fall-a622a120a/" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="https://www.instagram.com/fall_muhamad/" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-sm-12 col-xs-12 wow fadeInDown mb-3" data-wow-delay=".6s">
                <div class="card fables-team-block fables-second-hover-text-color">
                    <div class="image-container shine-effect">
                       <a href="#"><img class="w-100" src="/assets/custom/images/sock_moustapha_developpeur_web.png" alt=""></a>
                    </div>

                  <div class="card-body">
                    <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">MOUSTAPHA SOCK</a></h5>
                    <p class="font-13 fables-fifth-text-color italic my-2">Dev FullStack</p>
                    <ul class="nav fables-team-social-links">
                        <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-sm-12 col-xs-12 wow fadeInDown mb-3" data-wow-delay=".9s">
                <div class="card fables-team-block fables-second-hover-text-color">
                    <div class="image-container shine-effect">
                       <a href="#"><img class="w-100" src="/assets/custom/images/sindidi.png" alt=""></a>
                    </div>

                  <div class="card-body">
                    <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">OUSSEYNOU JOB</a></h5>
                    <p class="font-13 fables-fifth-text-color italic my-2">Dev FullStack @CEO</p>
                    <ul class="nav fables-team-social-links">
                        <li><a href="https://www.linkedin.com/in/ousseynou-sindidi-job-737841b4/" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                        <li><a href="https://www.instagram.com/sindidi_diop/" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- End Team -->

<!-- Start Testimonials -->
<div class="fables-testimonial fables-after-overlay py-4 py-lg-5 testimonial-index-bg mt-4 mt-lg-5 bg-rules">
    <div class="container">
         <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-2">{{ __('messages.tm0') }}</h2>
         <p class="font-14 fables-third-text-color text-center z-index position-relative mt-2">{{ __('messages.tm1') }}</p>
         <div class="row">
             <div class="col-12 col-lg-8 offset-lg-2">

                  <div class="owl-carousel owl-theme dots-0 mt-4 center-testimonial-carousel padding-outer" id="fables-testimonial-carousel">
                       <div class="text-center fables-testimonial-carousel-item">
                            <div>
                               <img src="/assets/custom/images/directeur_cgs2i.jpg" alt="" class="fables-testimonial-carousel-img rounded-circle">
                            </div>
                            <div>
                                 <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                     {{ __('messages.regis') }}
                                 </p>
                                 <h3 class="font-14 semi-font text-white">Régis L P ROCTON</h3>
                                 <h3 class="font-13 font-italic white-color mt-2"> {{ __('messages.regis_job') }}, cgs2i</h3>

                            </div>
                       </div>
                       <div class="text-center fables-testimonial-carousel-item">
                            <div>
                               <img src="/assets/custom/images/papis.jpg" alt="" class="fables-testimonial-carousel-img rounded-circle">
                            </div>
                            <div>
                                 <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                     {{ __('messages.papis') }}
                                 </p>
                                 <h3 class="font-14 semi-font text-white">Papis</h3>
                                 <h3 class="font-13 font-italic white-color mt-2"> {{ __('messages.papis_job') }}, LMCI</h3>

                            </div>
                        </div>
                        <div class="text-center fables-testimonial-carousel-item">
                         <div>
                            <img src="/assets/custom/images/Thomas.jpg" alt="" class="fables-testimonial-carousel-img rounded-circle">
                         </div>
                         <div>
                              <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                 {{ __('messages.thomas') }}
                              </p>
                              <h3 class="font-14 semi-font text-white">Thomas Manoj</h3>
                              <h3 class="font-13 font-italic white-color mt-2"> {{ __('messages.thomas_job') }}, Triengineering Sarl</h3>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</div>
<!-- End   Testimonials -->
<div>
    <img src="/assets/custom/images/Iconedev_Work_process_mth_work2.png" alt="" class="w-100">
</div>

<!-- Start Latest Blog -->
<div class="container mt-3">
           <div class="row overflow-hidden">
              <div class="col-12">
                  <h2 class="font-35 bold-font fables-second-text-color mb-4 mb-md-5">Tech <span class="fables-main-text-color">Actu</span></h2>
              </div>
               @foreach(index_articles() as $article)
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInRight" data-wow-delay=".4s">
                      <div class="image-container rotateIn-effect">
                          <a href="{{route('read_article',$article->titre_slug)}}">
                            <img  src="{{$article->image}}" alt="" class="w-100"></a>
                      </div>
                      <h2 class="bold-font font-20 mt-3"><a href="{{route('read_article',$article->titre_slug)}}" class="fables-second-text-color fables-main-hover-color">{!!Str::limit($article->titre,47,'...')!!}</a></h2>
                      <div class="py-2 fables-fifth-text-color float-left w-100 d-md-none d-lg-block">
                          <div class="float-left font-13">
                                 <span class="fables-iconcalender"></span> {{$article->created_at}}
                           </div>
                           <div class="float-right font-13">
                               <span class="fables-iconnews"></span> {{$article->author}}
                           </div>
                      </div>
                      <!-- p class="fables-forth-text-color font-14 mb-2 text-justify">
                         {!!Str::limit($article->description,85,'...')!!} 
                      </p -->
                      <a href="{{route('read_article',$article->titre_slug)}}" class="btn fables-second-text-color fables-main-hover-color p-0">
                          <span class="underline">En savoir plus</span>
                          <span class="fables-iconarrow-light ml-2"></span>
                      </a>
                </div>
              @endforeach
           </div>
</div>
<!-- End   Latest Blog -->

<!-- Start Parteners Slider -->
<div class="fables-light-background-color py-4 mt-4 mt-lg-5">
    <div class="container">
        <h3 style="text-align: center;font-family:Esrebondgrotesque, sans-serif;font-size:35px;font-weight: 400;line-height:40px;font-color:rgb(5, 24, 60);"> {{ __('messages.partners') }}</h3>
        <div class="row mt-3">
            <div class="owl-carousel owl-theme px-6 mt-0 mb-4 my-lg-5" id="fables-partner-carousel">
                <style>
                    .fables-partner-nav-icon{
                        display: none;
                    }
                </style>
                <div>
                    <img src="/assets/custom/images/dnn.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/logo-adie.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/der_financements.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/lmci.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/cgs2i.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/dnn.png" alt="" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="/assets/custom/images/der_financements.png" alt="" class="fables-partner-carousel-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End   Parteners Slider -->

@endsection
