@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Réalisations')
<meta name="description" content="ICONEDEV est une entreprise informatique basée à Dakar qui a pour vocation de créer et d’aider à créer des solutions numériques (application web et mobile) sur mesures pour les petites et moyennes entreprises." />
    <meta name="keywords" content="Startup, Application web, apllication mobile, Application desktop/Bureau, Software, Logiciel, progiciel, gestion commerciale, maintenance logiciel, Réferencement SEO, Site web, site web sur mesure. "/>
    <meta name="robots" content="index,follow"/>
    <meta charSet="utf-8" />
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, user-scalable=no, viewport-fit=cover" />
    <title>{{$article->titre}}</title>
    <meta property="og:title" content="{{$article->titre}}" />
    <meta name="description" content="{!!Str::limit($article->titre,47,'...')!!}" />
    <meta property="og:description" content="{!!Str::limit($article->description,80,'...')!!}" />
    <link rel="canonical" href="https://iconedev.com/article/{{$article->titre_slug}}" />
   
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$article->titre}}" />
    <meta property="og:url" content="https://iconedev.com/article/{{$article->titre_slug}}" />
    <meta property="og:site_name" content="Iconedev" />
    <meta property="article:publisher" content="https://www.facebook.com/GroupeIconeDev" />
    <meta property="article:published_time" content="{{$article->created_at}}" />
    <meta property="article:modified_time" content="{{$article->update_at}}" />
    <meta property="og:image" content="{{$article->image}}"  />
    
    <meta name="twitter:data1" content="{{$article->image}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@dev_icon" />
    <meta name="twitter:site" content="https://iconedev.com" />
    <meta name="next-head-count" content="22" />
    <meta property="fb:app_id" content="Iconedev">
    <meta property="fb:pages" content="Iconedev">
    <meta property="article:author" content="https://www.facebook.com/GroupeIconeDev">
    <meta property="article:section" content="{{$article->category}}">
    <meta property="ia:markup_url" content="https://iconedev.com/article/{{$article->titre_slug}}">
    <meta name="apple-mobile-web-app-title" content="Iconedev">
    <meta name="application-name" content="Iconedev">
    <meta name="msapplication-TileColor" content="#00a7e3">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
@section('content')

<!-- Start Header -->
<div class="fables-header fables-after-overlay bg-rules" id="fables-header-detail_blog">
    <div class="container"> 
         <h5 class="fables-page-title fables-second-border-color wow fadeInLeft text-center" data-wow-duration="1.5s">DECOUVRIR L'ARTICLE</h5>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
            <nav aria-label="breadcrumb">
              <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                <li class="breadcrumb-item"><a href="{{route('accueil')}}" class="fables-second-text-color">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$article->titre}}</li>
              </ol>
            </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
<div class="container"> 
      <div class="my-4 my-lg-4"> 
          <div class="owl-carousel owl-theme default-carousel nav-0 single-blog"> 
              <div>
                  <img src="{{$article->image}}" alt="{{$article->image}}" class="w-100">
              </div>
          </div>
          <h4 class="font-23 semi-font"><a href="{{route('read_article',$article->titre_slug)}}" class="fables-main-text-color fables-second-hover-color">{{$article->titre}}</a></h4>
          <div class="fables-forth-text-color fables-blog-date">                                  
              <div class="row">
                  <div class="col-12 col-md-9 col-lg-10 pt-2">
                          <span class="fables-icondata fables-second-text-color mr-1"></span> 
                          <span class="mr-3"> {{$article->created_at}} </span>
                          <span>Lu {{$article->views_count}} Fois </span>
                  </div>
                  <div class="col-12 col-md-3 col-lg-2 text-right mt-3 mt-md-0 text-center text-md-right">
                      <button class="btn btn-link fables-fifth-border-color fables-forth-hover-backround-color fables-forth-text-color " onclick="window.print();"><span class="fables-iconprint"></span> Imprimer l'article</button>
                  </div>
              </div>

          </div>

          <p class="fables-forth-text-color font-14 my-4">
              {!!$article->description!!}
          </p>

      </div>  
      
      <div class="d-flex justify-content-center mb-4" id="myDiv"><strong class="text-grey">Partager via </strong> </div>
      <div class="row overflow-hidden">
              <div class="fables-single-comment mt-3">
                <div class="row">
                          <div class="col-2">
                              <img src="/assets/custom/images/avatar.jpg" alt="" class="w-100">
                          </div>
                          <div class="col-10">
                              <p>
                                  <span class="fables-fifth-text-color font-14">Posté par</span>
                                  <a href="" class="fables-second-text-color fables-second-hover-color font-15 bold-font ml-1">Iconedev</a>
                              </p>
                              <p class="font-14 my-2 fables-main-text-color">
                                  Entreprise informatique basée à Dakar  
                              </p>
                          </div>
                      </div>
              </div>
          </div>
      </div>

       <div class="my-4 my-lg-5 container">
         <h2 class="fables-main-text-color text-center underline my-4 font-25 semi-font mb-5">D'autres articles</h2>  
         <div class="owl-carousel owl-theme fables-main-dots carousel-items-4 mb-0 mb-lg-5">
            @foreach(all_articles_recent() as $article_r)
            @if($article->id != $article_r->id)
            <div> 
               <div class="image-container zoomIn-effect">
                   <a href="{{route('read_article',$article_r->titre_slug)}}">
                    <img src="{{$article_r->image}}" alt="" class="w-100"></a> 
               </div>
             
              <div class="fables-forth-text-color font-14 my-2">                                  
                  <span class="fables-icondata fables-second-text-color mr-1"></span> 
                  <span class="mr-3"> {{$article_r->created_at}} </span>
              </div>
              <h2 class="font-18 semi-font"><a href="{{route('read_article',$article_r->titre_slug)}}" class="fables-main-text-color fables-second-hover-color">{!!Str::limit($article_r->titre,47,'...')!!}</a></h2> 
              <a href="{{route('read_article',$article_r->titre_slug)}}" class="btn fables-second-text-color fables-main-hover-color font-14 p-0 my-3">En savoir plus <i class="fas fa-chevron-right"></i></a>  
            </div>
            @endif
            @endforeach
         </div>
        </div>
</div>  
<!-- /End page content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/monokai-sublime.min.css">
    <link rel="stylesheet" href="/frontend/social-sharing-buttons/css/socialSharing.css">
    <style>
        #myDiv a {
          background: grey;
          padding: 0.55rem;
          font-size: 16px;
          width: 32px;
          align-items: center;
          justify-content: center;
        }
        #myDiv a i {
          color: #ffffff !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/assets/social-sharing-buttons/js/socialSharing.js"></script>
    <script>
        $('#myDiv').socialSharingPlugin({
            url:'https://iconedev.com/article/{{$article_r->titre_slug}}',
            title: $('meta[property="og:title"]').attr('content'),
            description: $('meta[property="og:description"]').attr('content'),
            img: $('meta[property="og:image"]').attr('content'),
            enable: ['copy', 'facebook', 'twitter', 'linkedin', 'email', 'whatsapp']
        });
    </script>
@endsection