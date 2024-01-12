@extends('backend.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'ICONEDEV - entreprise informatique basée à Dakar')
@section('content')
<div class="page-header d-print-none container">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Tous les articles
        </h2>
      </div>
    </div>
</div>
  
@livewire('all-articles')

@endsection

@push('scripts')
  <script>
    window.addEventListener('deletePost', function(event){
         swal.fire({
            title:event.detail.title,
            imageWidth:48,
            imageHeight:48,
            html:event.detail.html,
            showCloseButton:true,
            showCancelButton:true,
            cancelButtonText:'Cancel',
            confirmButtonText:'Yes, Delete',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#3085d6',
            width:300,
            allowOutsideClick:false
         }).then(function(result){
             if(result.value){
                window.livewire.emit('deletePostAction', event.detail.id);
             }
         });
    });
  </script>
@endpush
