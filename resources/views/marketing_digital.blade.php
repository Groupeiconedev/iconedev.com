@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Marketing Digital')
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
<div class="fables-header" id="fables-header-marketing">
    <div class="container">
         <h2 class="fables-page-title fables-second-border-color">MARKETING DIGITAL</h2>
    </div>
</div>
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Marketing Digital</li>
          </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->

<!-- Start page content -->
<div class="container mt-4 mt-lg-5">
     <div class="owl-carousel owl-theme default-carousel  default-carousel-nav">
              <div>
                  <a href="#">
                    <img src="assets/custom/images/marketing2.png" alt="" class="w-100">
                  </a>
              </div>
              <div>
                  <a href="#">
                    <img src="assets/custom/images/marketing2.png" alt="" class="w-100">
                  </a>
              </div>
              <div>
                  <a href="#">
                    <img src="assets/custom/images/marketing2.png" alt="" class="w-100">
                  </a>
              </div>
          </div>
     <div class="row mb-4 my-lg-5">
          <div class="col-12 col-md-12">
              <p class="fables-fifth-text-color font-14 text-justify" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 35.12px; color: rgb(0, 0, 0);">
                Le Marketing digital désigne l’ensemble des techniques marketing utilisées pour faire connaître des produits et services.
                à travers des supports et canaux digitaux. <strong>Iconedev</strong> en parfaite collaboration avec son partenaire de marque <strong>DayAndNightCom</strong> (pionier dans le marketing digital),
                nous vous accompagnons dan vos projets marketing et de communication que ce soit pour consolider une identité visuelle très forte, lancer un produit sur le marché, générer des leads qualifiés, trouver des nouveaux clients ou juste organiser des événements.
              </p>
            </div>
     </div>
       <div class="fables-blog-slider py-4 py-lg-5 fables-light-background-color mb-4 mb-lg-5" hidden>
             <div class="container">
                 <h2 class="fables-main-text-color text-center mb-4 mb-lg-5 font-26 bold-font">Les technologies & outils que nous utilisons</h2>
                 <div class="owl-carousel owl-theme nav-slider">
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                       </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                     <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                       </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                     <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider1.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                       </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider2.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/blog-slider3.jpg" alt="" class="w-100"></a>
                          <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">
                           Project Title</a></h2>
                           <p class="fables-fifth-text-color font-14">
                              Contrary to popular belief, Lorem Ipsum
                          </p>
                      </div>
                </div>
             </div>
        </div>

</div>
<!-- /End page content -->

@endsection
