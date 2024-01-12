@if(session('success'))
   <div class="top-notice bg-success text-white alert-dismissable fade show">
        <div class="container text-center">
            <h5 class="d-inline-block">{{session('success')}}</h5>
            <button title="Close(Esc)" type="button" class="mfp-close btnClose">×</button>
        </div>
    </div>
@endif


@if(session('error'))
    <div class="top-notice bg-danger text-white alert-dismissable fade show">
        <div class="container text-center">
            <h5 class="d-inline-block">{{session('error')}}</h5>
            <button title="Close(Esc)" type="button" class="mfp-close btnClose">×</button>
        </div>
    </div>
@endif

<script>
    $(function(){
        setInterval(function () {
            $(".btnClose").click();
        }, 8000);
    });    
</script> 