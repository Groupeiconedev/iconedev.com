<div class="container">
    
   <div class="row row-cards">
        @forelse($articles as $post)
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <a href="{{ route('read_article', $post->titre_slug) }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{$post->image}}" alt="" class="card-img-top">
                </a>
                <div class="card-body p-2">
                    <span class="badge badge-primary">{{$post->created_at}}</span>
                    <span class="badge badge-secondary">{{$post->author}}</span>
                    @if ($post->etat == 'Publié')
                        <span class="badge bg-success">Publié</span>
                    @else
                        <span class="badge bg-warning">Brouillon</span>
                    @endif
                    <div class="m-0 mb-1 text-center h5">{{$post->titre}}</div>
                </div>
                <div class="d-flex justify-content-between p-2 ">
                    <a href="{{ route('admin.editArticle', $post->id) }}" class="btn btn-warning ">Edit</a>
                    <a href="" wire:click.prevent='deleteArticleAction({{$post->id}})' class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        @empty
          <span class="text-danger">No post(s) found</span>
        @endforelse
   </div>

</div>
