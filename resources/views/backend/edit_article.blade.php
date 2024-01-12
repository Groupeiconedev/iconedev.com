@extends('backend.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'ICONEDEV - entreprise informatique basée à Dakar')
@section('content')

<div class="page-header d-print-none container">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
            Modifier l'Article
        </h2>
      </div>
    </div>
  </div>
  <div class="container">
       <form action="{{ route('admin.updateArticle')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" value="{{$post->id }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label class="form-label">Titre de l'article</label>
                                <input required type="text" class="form-control" name="titre" placeholder="Donner un titre" value="{{ $post->titre }}">
                                <span class="text-danger error-text post_title_error"></span>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Description</div>
                                <textarea class="ckeditor form-control" name="description" rows="6" placeholder="Contetenu..." id="description">{!! $post->description !!}</textarea>
                                <span class="text-danger error-text description_error"></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <div class="form-label">Image de garde</div>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">Parcourir</button>
                                    </div>
                                    <input value="{{$post->image}}" type="text" id="image_label" class="form-control" name="image"
                                           aria-label="Image" aria-describedby="button-image">                                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Catégorie</div>
                                <select class="form-select" name="category">
                                  <option value="{{$post->category}}">{{$post->category}}</option>
                                  <option value="Technologie">Sélectionner une catégorie</option>
                                  <option value="IA">IA</option>
                                  <option value="Ingénierie logicielle">Ingénierie logicielle</option>
                                  <option value="Développement web">Développement web</option>
                                  <option value="Développement mobile">Développement mobile</option>
                                  <option value="Markting digital">Markting digital</option>
                                </select>
                                <span class="text-danger error-text post_category_error"></span>
                            </div>
        
                            <div class="mb-3">
                                <div class="form-label">Etat Publication</div>
                                <select class="form-select" name="etat">
                                    <option value="{{$post->etat}}" >{{$post->etat}}</option>
                                    <option value="Publié" >Publié</option>
                                    <option value="Brouillon" >En Brouillon</option>
                                </select>
                                <span class="text-danger error-text post_category_error"></span>
                            </div>
                            <div class="d-flex justify-content-between p-2 ">
                                <a style="text-decoration: none;" href="/admin/admin/articles/all" class="text-white btn btn-danger" rel="noopener noreferrer">Annuler</a>
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </form>
   </div>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('button-image').addEventListener('click', (event) => {
    event.preventDefault();

    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });
    });

    // set file link
    function fmSetLink($url) {
    document.getElementById('image_label').value = $url;
    }
</script>
@endsection