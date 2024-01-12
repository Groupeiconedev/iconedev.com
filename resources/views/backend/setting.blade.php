@extends('backend.layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'ICONEDEV')
@section('content')
      @livewire('parametre')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

             // First button
            document.getElementById('button_image_logo').addEventListener('click', (event) => {
              event.preventDefault();
        
              inputId = 'image_logo';
        
              window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        
            // second button
            document.getElementById('button_image_favicon').addEventListener('click', (event) => {
              event.preventDefault();
        
              inputId = 'image_favicon';
        
              window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
            
            // second button
            document.getElementById('button_image_bg').addEventListener('click', (event) => {
              event.preventDefault();
        
              inputId = 'image_bg';
        
              window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
      });
    
      // input
      let inputId = '';
    
      // set file link
      function fmSetLink($url) {
        document.getElementById(inputId).value = $url;
      }
        
    </script>
@endsection