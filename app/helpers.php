<?php

use App\Models\Article;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * GET INDEX ARTICLES
 */
if(!function_exists('index_articles')){
    function index_articles(){
        return Article::where('etat','Publié')
           ->limit(3)
           ->orderBy('created_at', 'desc')
           ->get();
    }
}

/***
 * Get All Recents Articles 
 * */
if(!function_exists('all_articles_recent')){
    function all_articles_recent(){
       return Article::where('etat', 'Publié')
        ->orderBy('created_at', 'desc')
        ->limit(4)->get();
    }
}

/**
 * GET INDEX ARTICLES
 */
if(!function_exists('blog_articles')){
    function blog_articles(){
        return Article::where('etat','Publié')
           ->orderBy('created_at', 'desc')
           ->get();
    }
}