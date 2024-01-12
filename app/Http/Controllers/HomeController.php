<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //Create Article
    public function createArticle(Request $request){
        $article = new Article([
            "titre" =>$request->titre,
            "description"=>$request->description,
            "category"=>$request->category,
            "etat"=>$request->etat,
            "author"=>"Iconedev",
            "image"=>$request->image,
        ]);

        $saved = $article->save();

         if($saved){
            return redirect()->route('admin.all_articles')->with(['code'=>3,'msg'=>'Quelque chose s\'est mal passé lors de la mise à jour du poste.']);
         }else{
            return response()->json(['code'=>3, 'msg'=>'Un problème s\'est produit lors de l\'enregistrement des données du message.']);
         }
    }
    
    // Read single Article
    public function readArticle($slug){
        if(!$slug){
            return abort(404);
        }else{
            $article = Article::where('titre_slug', $slug)->first();
            if(!auth()->user()){
                $article->increment('views_count');
            }
            $data = [
                'pageTitle' => Str::limit($slug, 15, '...'),
                'article' => $article,
            ];
            return view('single-article',$data);
        }
    }
    
     public function editArticle(Request $request){
        
        $post = Article::find($request->id);
        $data = [
            'post'=>$post,
        ];
        return view('backend.edit_article',$data);
    }
    
    public function updateArticle(Request $request){

        $article = Article::find($request->id);
        $article->titre_slug = null;

        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->etat = $request->etat;
        $article->author = "Iconedev";
        $article->category = $request->category;
        $article->image = $request->image;

        $saved = $article->update();

        if( $saved ){
            return redirect()->route('admin.all_articles')->with(['code'=>3,'msg'=>'Something went wrong for updating post.']);
            // return response()->json(['code'=>1,'msg'=>'Post has been successfully updated.']);
        }else{
            return response()->json(['code'=>3,'msg'=>'Something went wrong for updating post.']);
        }
    }
    
}
