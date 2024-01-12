<div>
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                  Paramètre du site
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Info  Site</h3>
                          <span wire:click="update()" class="mx-3 btn btn-sm btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                   <path d="M14 4l0 4l-6 0l0 -4"></path>
                                </svg>
                          </span>
                        </div>
                        <div class="card-body">
                            <div class="row row-cards">
                                
                                <div class="mb-3 col-sm-12 col-md-12">
                                    <div class="form-label">Site name</div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" wire:model="name">
                                    </div>
                                </div>
                                
                                <div class="mb-3 col-sm-12 col-md-12">
                                    <div class="form-label">Site Adresse</div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Adresse de votre structure" wire:model="adresse">
                                    </div>
                                </div>
                                
                                <div class="mb-3 col-sm-12 col-md-12">
                                    <div class="form-label">Logo</div>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button_image_logo">Parcourir</button>
                                        </div>
                                        <input type="text" id="image_logo" wire:model="logo" class="form-control" aria-label="Image" aria-describedby="button-image">
                                    </div>
                                </div>
                            
                                <div class="mb-3 col-sm-12 col-md-12">
                                    <div class="form-label">Favicon</div>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button_image_favicon">Parcourir</button>
                                        </div>
                                        <input type="text" id="image_favicon" wire:model="favicon" class="form-control" aria-label="Imag_e" aria-describedby="button-image">
                                    </div>
                                </div>
                            
                                <div class="mb-3 col-sm-12 col-md-12">
                                    <div class="form-label">Backgroud Image</div>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button_image_bg">Parcourir</button>
                                        </div>
                                        <input type="text" id="image_bg" wire:model="bg" class="form-control" aria-label="v" aria-describedby="button-image">                                    
                                    </div>
                                </div>
                                
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Lien Réseaux Sociaux</h3>
                          <span wire:click="update()" class="mx-3 btn btn-sm btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                   <path d="M14 4l0 4l-6 0l0 -4"></path>
                                </svg>
                          </span>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Facebook</label>
                              <input type="text" class="form-control" wire:model="facebook">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Twitter</label>
                              <input type="text" class="form-control"  wire:model="twitter">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Instagram</label>
                              <input type="text" class="form-control" wire:model="instagram" >
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Linkedin</label>
                              <input type="text" class="form-control" wire:model="linkedin">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Youtube</label>
                              <input type="text" class="form-control" wire:model="youtube">
                            </div>
                          </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Contacts</h3>
                          <span wire:click="update()" class="mx-3 btn btn-sm btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                   <path d="M14 4l0 4l-6 0l0 -4"></path>
                                </svg>
                          </span>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Numéro Téléphone I</label>
                              <input type="text" class="form-control" wire:model="number1">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Numéro Téléphone II</label>
                              <input type="text" class="form-control"  wire:model="number2">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Numéro Téléphone III</label>
                              <input type="text" class="form-control" wire:model="number3" >
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Numéro Téléphone Fixe</label>
                              <input type="text" class="form-control" wire:model="number_fixe">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Email</label>
                              <input type="text" class="form-control" wire:model="email">
                            </div>
                          </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Statistique</h3>
                          <span wire:click="update()" class="mx-3 btn btn-sm btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                   <path d="M14 4l0 4l-6 0l0 -4"></path>
                                </svg>
                          </span>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Nombre de clients</label>
                              <input type="text" class="form-control" wire:model="clients">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Nombre de projets</label>
                              <input type="text" class="form-control"  wire:model="projet">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Nombre de partenaires</label>
                              <input type="text" class="form-control" wire:model="partenaires" >
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Nombres d'années d'expériences</label>
                              <input type="text" class="form-control" wire:model="experiences">
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12">
                              <label class="form-label ">Lien Map</label>
                              <input type="text" class="form-control" wire:model="map">
                            </div>
                            
                          </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Description</h3>
                          <span wire:click="update()" class="mx-3 btn btn-sm btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                               <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                               <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                               <path d="M14 4l0 4l-6 0l0 -4"></path>
                            </svg>
                        </span>
                        </div>
                        <div class="card-body">
                          <div class="row row-cards">
                            <div class="mb-3 col-sm-12 col-md-12">
                              <textarea class="ckeditor form-control" rows="6" placeholder="Contetenu..." wire:model="description"></textarea>
                            </div>
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
