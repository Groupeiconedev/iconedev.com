@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | ingénierie Logicielle')
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
<div class="fables-header" id="fables-header-conding">
    <div class="container">
         <h2 class="fables-page-title fables-second-border-color">INGENIERIE LOGICIELLE</h2>
    </div>
</div>
<!-- /End Header -->

<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ingénierie Logicielle</li>
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
                    <img src="assets/custom/images/single-gallery.png" alt="" class="w-100">
                  </a>
              </div>
              <div>
                  <a href="#">
                    <img src="assets/custom/images/single-gallery.png" alt="" class="w-100">
                  </a>
              </div>
              <div>
                  <a href="#">
                    <img src="assets/custom/images/single-gallery.png" alt="" class="w-100">
                  </a>
              </div>
          </div>
     <div class="row mb-4 my-lg-5">
          <div class="col-12 col-md-12">
              <p class="fables-fifth-text-color font-14 text-justify" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 35.12px; color: rgb(0, 0, 0);">
                A cette ére numérique, la digitalisation des services/produits des entreprises est devenue une nécessité pour mieux impacter leurs consommateurs.
                Ainsi, toutes les entreprises cherchent de plus en plus à se rapprocher davantage de leurs clients en mettant à leur disposition des plateformes ou logiciels bien réfléchis en termes d’expérience utilisateurs.
                Et donc disposer d’un outil digital est plus qu'indispensable de nos jours. Avec plus d'une vingtaine de clients accompagnés dans la mise en place de leur stratégie digitale, le Groupe ICONEDEV a développé une expertise reconnue dans le secteur du numérique, et donc concoit tout type de projets logiciels.
                Notre équipe de jeunes développeurs relève des défis chaque jour afin d’offrir les meilleurs produits digitaux de fortes valeurs ajoutées et répondant aux standards internationaux à nos centaines de clients de par le monde entier.
                Ce vaste pôle embarque plusieurs services informatiques qui varie selon l’objectif de nos clients que sont notamment:
              </p>

              <ul class="mt-2">
                <li><h3>La conception et le développement d’application web</h3></li>
              </ul>
              <p class="fables-fifth-text-color font-14 text-justify mt-2" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 35.12px; color: rgb(0, 0, 0);">
                Notre expertise dans le milieu numérique, nous permet aujourd’hui de développer tous les types d’application web selon vos besoins, qu’elle soit juste statique, dynamique, de type e-shop ou e-commerce, web portail ou juste pour gérer du contenu, notre équipe d’experts vous fournira le meilleur produit à travers une méthodologie de travail basée sur l'agilité qui met le client et le consommateur au coeur du développement.
              </p>

              <ul class="mt-2">
                <li><h3>La conception et la réalisation d’application mobile</h3></li>
              </ul>
              <p class="fables-fifth-text-color font-14 text-justify mt-2" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 35.12px; color: rgb(0, 0, 0);">
                L’importance de l’usage du mobile n’est plus à démontrer aujourd’hui. Nous assistons à une hausse du nombre de mobinautes d’année en année. Si vous êtes à la recherche d’une équipe d'experts pour concevoir votre application mobile hybride ou native, nous mettons à votre disposition notre service, qui va vous accompagner depuis la phase de conception du prototype interactif jusqu’au déploiement final de votre application mobile sur les stores (Play et App).
              </p>

              <ul class="mt-2">
                <li><h3>La création de site à travers les CMS Wordpress, Drupal, Joomla</h3></li>
              </ul>
              <p class="fables-fifth-text-color font-14 text-justify mt-2" style="font-style: Raleway;font-size: 18px;font-weight: 300;line-height: 35.12px; color: rgb(0, 0, 0);">
                Nous accompagnons également nos clients selon leur besoin dans la conception de sites vitrines, d’informations, de e-commerce avec les CMS open source, à l’instar de Wordpress, Drupal, Joomla.
              </p>
            </div>


     </div>
       <div class="fables-blog-slider py-4 py-lg-5 fables-light-background-color mb-4 mb-lg-5">
             <div class="container">
                 <h2 class="fables-main-text-color text-center mb-4 mb-lg-5 font-26 bold-font">Les technologies & outils que nous utilisons</h2>
                 <div class="owl-carousel owl-theme nav-slider">
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/java.png" alt="" class="w-100"></a>
                       </div>
                       <div class="text-center">
                          <a href="#"><img src="assets/custom/images/php.png" alt="" class="w-100"></a>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/laravel.png" alt="" class="w-100"></a>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/python.png" alt="" class="w-100"></a>
                      </div>
                      <div class="text-center">
                          <a href="#"><img src="assets/custom/images/angular.png" alt="" class="w-100"></a>
                      </div>
                      <div class="text-center">
                        <a href="#"><img src="assets/custom/images/flutter.png" alt="" class="w-100"></a>
                    </div>

                </div>
             </div>
        </div>

</div>
<!-- /End page content -->

@endsection
