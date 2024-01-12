@extends('layouts.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Iconedev | Contact')
    
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
    <meta name="twitter:title" property="og:title" itemprop="name" content="Iconedev - Développement d’application Web & Mobile"/>
    <meta name="twitter:description" property="og:description" itemprop="description" content="Nous avons le code dans notre ADN : une startup de développement logiciel taillée pour le succès."/>
    <meta name="twitter:image" content="./assets/custom/images/iconedev_s.jpg"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    @section('content')

    <!-- Start Header -->
    <div class="fables-header"><!-- fables-after-overlay -->
        <div class="container">
             <h2 class="fables-page-title fables-second-border-color">CONTACT</h2>
        </div>
    </div>
    <!-- /End Header -->

    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
              <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                <li class="breadcrumb-item"><a href="/" class="fables-second-text-color">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->


    <!-- Start page content -->
    <div class="container">
        <div class="row my-4 my-md-5 overflow-hidden">
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <span class="fables-iconmap-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Adresse</h2>
                    <p class="font-14 fables-forth-text-color">
                        km 12, Route de Rufisque, Station Shell.
                    </p>
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                    <span class="fables-iconphone fa-2x  fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">E-Mail & Téléphone</h2>
                    <p class="font-14 fables-forth-text-color">info.iconedev@gmail.com</p>
                    <p class="font-14 fables-forth-text-color">+221 77 361 69 69</p>
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s">
                    <span class="fables-iconshare-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Nous sommes sur</h2>
                    <ul class="nav fables-contact-social-links">
                        <li><a href="https://www.facebook.com/GroupeIconeDev" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                        <li><a href="https://www.instagram.com/iconedev/" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                    </ul>
             </div>
        </div>
    </div>
    
    <div class="fables-contact-caption fables-after-overlay px-2 px-sm-5 text-left text-sm-center py-5 bg-rules">
       <div class="container">
           <div class="row">
               <div class="col-12 col-lg-8 offset-lg-2">
                   <h3 class="font-25 font-weight-bold white-color position-relative z-index">Parlez Nous De Votre Projet !</h3>
                   <p class="font-weight-light fables-third-text-color my-3 position-relative z-index">La concrétisation de vos idées de projets est au coeur de nos préoccupations.</p>
                   <a href="#contact" class="btn fables-second-background-color fables-rounded-btn white-color fables-btn-rounded font-19 px-5 mt-2 position-relative z-index">embarquez-vous !</a>
               </div>
            <span id="contact"></span>
           </div>
       </div>
    </div>
    
    <div class="container">
        <div class="row my-4 my-md-5">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="font-35 font-weight-bold fables-second-text-color text-center mb-3">Laisser nous un méssage</h3>
                <p class="fables-forth-text-color text-center">Faites nous confiance et ayez une stratégie digitale inégalable . </p>
            </div>
        </div>
        <div class="row overflow-hidden">
            <div class="col-12 wow slideInLeft">
                @if($message = Session::get('success'))
                    <div class="alert alert-success">{{$message}}</div>
                @endif
                <form class="fables-contact-form" method="POST" action="{{route('contact.store')}}">
                    @csrf
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0"  placeholder="Prénom" name="prenom">
                          @error('prenom')
                            <div class="alert fables-second-background-color text-white">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0"  placeholder="Nom" name="nom">
                          @error('nom')
                            <div class="alert fables-second-background-color text-white">{{$message}}</div>
                          @enderror
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0" placeholder="Email" name="email">
                          @error('email')
                            <div class="alert fables-second-background-color text-white">{{$message}}</div>
                          @enderror
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0" placeholder="sujet" name="subject">
                          @error('subject')
                            <div class="alert fables-second-background-color text-white">{{$message}}</div>
                          @enderror
                      </div>
                  </div>
                  <div class="form-row">
                       <div class="form-group col-md-12">
                           <textarea class="form-control p-3 rounded-0" placeholder="Message" rows="4" name="message"></textarea>
                           @error('message')
                            <div class="alert fables-second-background-color text-white">{{$message}}</div>
                          @enderror
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn fables-second-background-color fables-btn-rounded white-color px-7 font-20 py-2">Envoyer</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    
    <h3 class="fables-second-text-color font-35 font-weight-bold text-center mt-0 mb-5 my-md-5">Localisation</h3>
    <div class="mb-4 mb-md-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.42942275377!2d-17.38355822566637!3d14.744820173530986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10b576c2c69fd%3A0xb6758261335eea19!2sShell%20Poste%20Thiaroye!5e0!3m2!1sfr!2ssn!4v1687028437300!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<!-- /End page content -->
@endsection
