@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Blog d\'actualités')
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
    <meta name="apple-mobile-web-app-capable" content="yes">
@section('content')
<!-- Start Header -->
<div class="fables-header fables-after-overlay" id="fables-header-blog">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">ACTUALITES</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nos articles</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
<div class="container">
    <div class="row mt-4 mt-lg-5"> 
      @foreach(blog_articles() as $article)
        <div class="col-sm-4 p-2"> 
          <div class="image-container zoomOut-effect">
             <a href="{{route('read_article',$article->titre_slug)}}">
                <img src="{{$article->image}}" alt="image alt text" class="w-100">
              </a>
          </div>
          <h2 class="font-18 semi-font mt-3 mb-2"><a href="{{route('read_article',$article->titre_slug)}}" class="fables-main-text-color fables-second-hover-color">{!!Str::limit($article->titre,47,'...')!!}</a></h2>
          <div class="fables-forth-text-color font-14 mb-2">                                  
              <span class="fables-icondata fables-second-text-color mr-1"></span> 
              <span class="mr-3"> {{$article->created_at}} </span>
          </div>
          <!-- p class="fables-forth-text-color font-14 mb-3">
             {!!Str::limit($article->description,85,'...')!!} 
          </p -->
          <a href="{{route('read_article',$article->titre_slug)}}" class="btn fables-main-text-color fables-second-hover-color font-14 p-0 underline">En savoir plus</a>  
        </div>
       @endforeach
    </div>
</div>
<!-- /End page content -->
    
@endsection