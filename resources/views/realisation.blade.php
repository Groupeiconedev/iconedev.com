@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Réalisations')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="title" content="Un savoir-faire unique, des solutions logicielles exceptionnelles : faites confiance aux experts du code."/>
    <meta name="description" content="ICONEDEV est une entreprise informatique basée à Dakar qui a pour vocation de créer et d’aider à créer des solutions numériques (applications web et mobile) sur mesures pour les petites et moyennes entreprises."/>
    <meta name="keywords" content="Entreprise informatique,Entreprise informatique au Sénégal,Meilleure Entreprise informatique au Sénégal,Meilleures Entreprises informatique au Sénégal,Entreprise informatique à Dakar,Startup,Startup Technologique,Startup Technologique au Sénégal, Application web, application mobile, Application desktop/Bureau, android, OS, innovation, tech, algorithme, génie logiciel , informatique , Software, Logiciel, progiciel, gestion commerciale, maintenance logiciel, Réferencement SEO, Site web, site web sur mesure, développeur, backend, frontend, java, laravel, php, mysql, spring boot,docker, jenkins."/>
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

<!-- Start Header -->
<div class="fables-header" id="fables-header-realisation">
    <div class="container">
         <h2 class="fables-page-title fables-second-border-color">NOS REALISATIONS</h2>
    </div>
</div>
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Réalisations</li>
          </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->

<!-- Start page content -->
       <div class="container">
             <div class="row mt-4 my-md-5">
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5">
                         <div class="image-container zoomOut-effect">
                             <a href="https://www.kanmaty.com/"  target="_blank"><img src="assets/custom/images/kanmaty_gall1.png" alt="" class="w-100"></a>
                         </div>

                          <h2 class="my-3"><a href="https://www.kanmaty.com/"  target="_blank" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title">Kanmaty Shop</a></h2>
                          <p class="fables-fifth-text-color font-14">
                              Site de E-commerce basé au sénégal dont la mission principale est de révolution l'expérience Shopping des utilisateurs.
                          </p>
                          <a href="https://www.kanmaty.com/" target="_blank" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">Explorer le site
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                          </svg></a>

                    </div>
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5">
                          <div class="image-container zoomOut-effect">
                             <a href="https://lmcisn.com/"  target="_blank"><img src="assets/custom/images/lmci_gall2.png" alt="" class="w-100"></a>
                         </div>
                          <h2 class="my-3"><a href="https://lmcisn.com/"  target="_blank" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title">Le Meilleur Courtier (LMCI)</a></h2>
                          <p class="fables-fifth-text-color font-14">
                            Le Meilleur Courtier (LMCI) - Est une plateforme digitale 100% dédiée au courtage immobilier !
                          </p>
                          <a href="https://lmcisn.com/"  target="_blank" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">Explorer le site
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                          </svg></a>

                  </div>
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5">
                          <div class="image-container zoomOut-effect">
                             <a href="https://event221.com/"  target="_blank"><img src="assets/custom/images/event221_gall3.png" alt="" class="w-100"></a>
                         </div>
                          <h2 class="my-3"><a href="https://event221.com/"  target="_blank" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title">Event221</a></h2>

                          <p class="fables-fifth-text-color font-14">
                            Event221 est un systéme de ticketing fiable sécurisé pour mieux rentabiliser vos évenements !
                          </p>
                          <a href="https://event221.com/"  target="_blank" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">Explorer le site
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                          </svg></a>

                  </div>
                  <div class="col-12 col-sm-6 mb-4 mb-lg-5">
                          <div class="image-container zoomOut-effect">
                             <a href="https://bionorasn.com/"  target="_blank"><img src="assets/custom/images/bionora_gall4.png" alt="" class="w-100"></a>
                         </div>
                          <h2 class="my-3"><a href="https://bionorasn.com/"  target="_blank" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title">BionoraSn</a></h2>
                          <!-- <div class="row my-2">
                              <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Categories </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : web design </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Client  </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : Donec sed odio </span>
                              </div>
                               <div class="col-12 col-lg-4">
                                  <span class="fables-main-text-color semi-font font-14 gallery-subtitle">Date  </span>
                                  <span class="fables-forth-text-color font-14 gallery-subtitle"> : 18 May 2017 </span>
                              </div>
                          </div> -->
                          <p class="fables-fifth-text-color font-14">
                            Vente et distribution de produits paramédicaux !
                          </p>
                          <a href="https://bionorasn.com/"  target="_blank" class="btn fables-second-background-color white-color white-color-hover fables-main-hover-background-color font-15 mt-4 px-5 py-2
                          ">Explorer le site
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                          </svg></a>
                  </div>
             </div>
       </div>
       <div class="fables-blog-slider py-4 py-lg-5 fables-light-background-color">
             <div class="container">
                 <h2 class="fables-main-text-color text-center mt-lg-4 mb-4 mb-lg-5 font-26 bold-font">Autres Projets</h2>
                 <div class="owl-carousel owl-theme nav-slider">
                       <div class="text-center">
                          <div class="image-container zoomOut-effect">
                             <a href="https://triengineering.co/" target="_blank"><img src="assets/custom/images/blog-slider1.png" alt="" class="w-100"></a>
                          </div>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="https://triengineering.co/" target="_blank" class="fables-main-text-color fables-second-hover-color">
                           Triengineering</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Entreprise industrielle et d'Electricité
                          </p>
                       </div>
                       <div class="text-center">
                          <div class="image-container zoomOut-effect">
                             <a href="https://www.diamane-immo.com/" target="_blank"><img src="assets/custom/images/diamane_gall6.png" alt="" class="w-100"></a>
                          </div>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="https://www.diamane-immo.com/" target="_blank" class="fables-main-text-color fables-second-hover-color">
                           Diamane Immo</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Agence de consultation en Immobiliére !
                           </p>
                      </div>
                      <div class="text-center">
                          <div class="image-container zoomOut-effect">
                             <a href="https://satistore.com/" target="_blank"><img src="assets/custom/images/Satistore.png" alt="" class="w-100"></a>
                          </div>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Satistore</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Site de publication d'annonces !
                          </p>
                      </div>
                      <div class="text-center">
                          <div class="image-container zoomOut-effect">
                             <a href="https://cgs2i.com/" target="_blank"><img src="assets/custom/images/cgs_2i.png" alt="" class="w-100"></a>
                          </div>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="https://cgs2i.com/" target="_blank" class="fables-main-text-color fables-second-hover-color">
                            cgs2i</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Construction de Bâtiment !
                          </p>
                      </div>
                </div>
             </div>
        </div>

<!-- /End page content -->

@endsection
