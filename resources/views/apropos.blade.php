@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Qui sommes-nous ?')
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
<div class="fables-header bg-rules" id="fables-header-apropos">
    <div class="container">
         <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">QUI SOMMES-NOUS ?</h2>
    </div>
</div>
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Qui sommes-nous</li>
          </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->

<!-- Start page content -->
   <div class="container mt-4">
       <div class="row overflow-hidden">
            <div class="col-12 col-md-6">
                 <div class="image-container translate-effect-right">
                    <img src="/assets/custom/images/mission.png" alt="Mission" class="img-fluid">
                 </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <span class="fables-iconrocket-icon fables-second-text-color fa-3x"></span>
                <h2 class="font-30 font-weight-bold fables-second-text-color my-4 d-inline-block d-lg-block wow fadeInRight" data-wow-duration="1.5s">Mission</h2>
                <div class="fables-vision-detail fables-forth-text-color wow fadeInRight text-justify" data-wow-duration="1.5s" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 25.12px; color: rgb(0, 0, 0);">
                    ICONEDEV s’engage auprès de ses clients en garantissant un service de qualité, des logiciels à la fois fiables, performants, scalables et évolutives dans le respect des normes et dans un environnement agile. Nous nous efforçons de construire des logiciels modernes, épurés, simples et ludiques, pour une prise en main plus rapide par vos équipes.
                </div>
            </div>
      </div>
    </div>

    <div class="fables-counter-section fables-after-overlay my-3 my-md-5 pt-4 pb-0 py-md-5 bg-rules">
        <div class="container">
           <div class="row">
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="12">12</h2>
                       <h3 class="font-14 semi-font text-white">CLIENTS SATISFAITS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="2">2</h2>
                       <h3 class="font-14 semi-font text-white">PROJETS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="3">3</h2>
                       <h3 class="font-14 semi-font text-white">PARTENAIRES</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 text-white border fables-second-border-color d-inline-block px-4 py-2 mb-4" data-count="16">16</h2>
                       <h3 class="font-14 semi-font text-white">3 ANS D'EXPERIENCE</h3>
                   </div>
               </div>
           </div>
        </div>
    </div>

    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12 col-md-6">
                <span class="fables-iconvision-icon fables-second-text-color fa-4x"></span>
                <h2 class="font-30 font-weight-bold fables-second-text-color my-4 wow fadeInLeft d-inline d-lg-block" data-wow-duration="1.5s">Notre Vision</h2>
                <div class="fables-forth-text-color mt-4 wow fadeInLeft text-justify" data-wow-duration="1.5s" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 25.12px; color: rgb(0, 0, 0);">
                    Notre vision est de contribuer à la révolution numérique en cours en participant activement à la construction des futures applications révolutionnaires du 21 eme siécle afin de faire partie des jeunes bâtisseurs sur le vaste chantier des nouvelles technologies de l'information. Nous projetons d’ici 10 ans d'accompagner 1000 Entreprises en Afrique et dans le monde. Le futur est numérique et nous envisageons de nous baigner dans ce futur avec nos propres solutions qui prennent en compte nos réalités sociétales.
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="image-container translate-effect-right">
                     <img src="/assets/custom/images/vusion.png" alt="Vusion" class="img-fluid">
                </div>

            </div>
        </div>
    </div>

<!-- Start Testimonials -->
<div class="fables-testimonial fables-after-overlay py-4 py-lg-5 testimonial-index-bg mt-4 mt-lg-5 bg-rules">
    <div class="container">
         <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-2">Ils nous ont fait confiance</h2>
         <p class="font-14 fables-third-text-color text-center z-index position-relative mt-2">Retour clients !</p>
         <div class="row">
             <div class="col-12 col-lg-8 offset-lg-2">

                  <div class="owl-carousel owl-theme dots-0 mt-4 center-testimonial-carousel padding-outer" id="fables-testimonial-carousel">
                       <div class="text-center fables-testimonial-carousel-item">
                            <div>
                               <img src="assets/custom/images/directeur_cgs2i.jpg" alt="logo_cgs2i" class="fables-testimonial-carousel-img rounded-circle">
                            </div>
                            <div>
                                 <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                     Le groupe cgs2i de par ma voix de Directeur Général, exprime toute sa satisfaction de la préstation d'Iconedev pour le développement de la plateforme cgs2i.
                                 </p>
                                 <h3 class="font-14 semi-font text-white">Régis L P ROCTON</h3>
                                 <h3 class="font-13 font-italic white-color mt-2">Directeur, cgs2i</h3>

                            </div>
                       </div>
                       <div class="text-center fables-testimonial-carousel-item">
                            <div>
                               <img src="assets/custom/images/papis.jpg" alt="profil papis" class="fables-testimonial-carousel-img rounded-circle">
                            </div>
                            <div>
                                 <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                     Merci Iconedev de nous avoir permis de relever d'avantage le défis de l'ecosysteme immobilier au Sénégal. Grâce à la première plateforme digitale d'LMCI, le courtage immobilier au sénegal est de nouveau beaucoup plus séduisant !
                                 </p>
                                 <h3 class="font-14 semi-font text-white">Papis</h3>
                                 <h3 class="font-13 font-italic white-color mt-2">Responsable, LMCI</h3>

                            </div>
                        </div>
                        <div class="text-center fables-testimonial-carousel-item">
                         <div>
                            <img src="assets/custom/images/Thomas.jpg" alt="profile Thomas" class="fables-testimonial-carousel-img rounded-circle">
                         </div>
                            <div>
                              <p class="mb-3 fables-third-text-color fables-testimonial-detail font-15 font-italic position-relative mb-4 px-0 px-md-5">
                                 Iconedev démontre une expertise hors du commun dans la mise en place de solutions digitales. Vous avez fait un travail remarquable vis à vis de notre site. Bravo les gars !
                              </p>
                              <h3 class="font-14 semi-font text-white">Thomas Manoj</h3>
                              <h3 class="font-13 font-italic white-color mt-2">Responsable Commercial, Triengineering Sarl</h3>
                            </div>
                        </div>
                 </div>
             </div>
         </div>
     </div>
</div>
<!-- End Testimonials -->

<!-- Team -->
    <div class="container mt-3">
        <div class="fables-team overflow-hidden">
            <h2 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center"> <code><</code> Equipe <code>/></code></h2>
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 wow fadeInDown mb-3" data-wow-delay=".3s">
                    <div class="card fables-team-block fables-second-hover-text-color">
                        <div class="image-container shine-effect">
                            <a href="#"><img class="w-100" src="assets/custom/images/fall.png" alt="FALLJS"></a>
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
                <div class="col-6 col-md-3 wow fadeInDown mb-3" data-wow-delay=".6s">
                    <div class="card fables-team-block fables-second-hover-text-color">
                        <div class="image-container shine-effect">
                            <a href="#"><img class="w-100" src="assets/custom/images/sock_moustapha_developpeur_web.png" alt="Moustapha Sock"></a>
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
                <div class="col-6 col-md-3 wow fadeInDown mb-3" data-wow-delay=".9s">
                    <div class="card fables-team-block fables-second-hover-text-color">
                        <div class="image-container shine-effect">
                            <a href="#"><img class="w-100" src="assets/custom/images/sindidi.png" alt="Sindidi Job"></a>
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
        <div class="row">
            <div class="owl-carousel owl-theme px-6 mt-0 mb-4 my-lg-5" id="fables-partner-carousel">
                <div>
                    <img src="assets/custom/images/dnn.png" alt="DN9 COM" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/logo-adie.png" alt="ADIE COMPAGNY" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/der.jpg" alt="FINANCEMENT DER" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/lmci.png" alt="LMCI SN" class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/cgs2i.png" alt="cgs2i" class="fables-partner-carousel-img">
                </div>
            </div>
        </div>
    </div>
<!-- /End Team -->
@endsection
