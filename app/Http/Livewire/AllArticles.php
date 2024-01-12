<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class AllArticles extends Component
{
    use WithPagination;
    public $perPage = 10000;
    public $search = null;
    public $author = null;
    public $category = null;
    public $orderBy = 'desc';

    protected $listeners = [
        'deleteArticleAction'
    ];

    public function mount(){
        $this->resetPage();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    public function updatingCategory(){
        $this->resetPage();
    }
    public function updatingAuthor(){
        $this->resetPage();
    }

    public function deleteArticle($id){
        $this->dispatchBrowserEvent('deleteArticle',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete this post.',
            'id'=>$id
        ]);
    }

    public function deleteArticleAction($id){
        $post = Article::find($id);
        $path = "images/article_images/";

        $featured_image = $post->featured_image;

        if( $featured_image != null && Storage::disk('public')->exists($path.$featured_image) ){
            //Delete resize image
            if( Storage::disk('public')->exists($path.'thumbnails/resized_'.$featured_image) ){
                Storage::disk('public')->delete($path.'thumbnails/resized_'.$featured_image);
            };
            //Delete thumb
            if( Storage::disk('public')->exists($path.'thumbnails/thumb_'.$featured_image) ){
                Storage::disk('public')->delete($path.'thumbnails/thumb_'.$featured_image);
            }

            //Delete post featured image
            Storage::disk('public')->delete($path.$featured_image);
        }

        $delete_post = $post->delete();

        if( $delete_post ){
            $this->showToastr('Post has been successfully deleted.','success');
        }else{
            $this->showToastr('Something went wrong.','error');
        }
    }

    public function showToastr($message,$type){
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=>$type,
            'message'=>$message
        ]);
    }
    public function render()
    {
        return view('livewire.all-articles',[
            'articles'=> Article::all(),
        ]);
    }
}