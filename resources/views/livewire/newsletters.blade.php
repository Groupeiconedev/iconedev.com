<div>
   <h2 class="font-30 semi-font mb-5">Newsletter</h2>
    @if($message = Session::get('success'))
        <div class="alert alert-success">{{$message}}</div>
    @endif
    <form class="form-inline position-relative" wire:submit.prevent='sabonner()'>
      <div class="form-group fables-subscribe-formgroup">
        <input type="text" wire:model='address' name="address"  class="form-control fables-subscribe-input fables-btn-rouned" placeholder="{{ __('messages.txt_plhder_address') }}">
      </div>
      @error('address')
        <div class="alert fables-second-background-color">{{$message}}</div>
      @enderror
      <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">{{ __('messages.txt_btn_newsletter') }}</button>
    </form>
</div>

