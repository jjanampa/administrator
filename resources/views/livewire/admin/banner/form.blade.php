<div>
    @include('admin.components.errors')
    <!--begin::Form-->
    <form class="form" wire:submit.prevent="{{ $method }}">
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="required">Tipo</span>
            </label>
            <select wire:model="banner.type" class="form-select form-select-solid @error('banner.type') 'invalid-feedback' @enderror">
                <option value="">Selecciona un tipo</option>
                <option value="Imagen">Imagen</option>
                <option value="Video">Video</option>
            </select>
            @error('banner.type') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row">
            <div
                class="col-lg-6 {{ $banner->type == 'Imagen' ? 'd-block' : 'd-none' }}"
                x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!--begin::Label-->
                <label class="fs-6 fw-bold mb-2">
                    <span class="">Imagen</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Tipo de archivo permitido: png, jpg, jpeg. gif, .webp"></i>
                </label>
                <!--end::Label-->
                <!--begin::Image input wrapper-->
                <div class="mt-1">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline">
                        <!--begin::Preview existing avatar-->
                        <div 
                            class="image-input-wrapper w-200px h-125px" 
                            @if ($imageTmp)
                                style="background-image: url('{{ $imageTmp->temporaryUrl() }}')"
                            @else
                                style="background-image: url('{{ $banner->imagePreview() }}')"
                            @endif
                        ></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Edit-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-input" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Cambiar imagen">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input wire:model.defer="imageTmp" class="d-none" type="file" name="" accept=".png, .jpg, .jpeg, .gif, .webp" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit-->
                        @if ($imageTmp || $banner->image)
                        <!--begin::Remove-->
                        <span wire:click.prevent="removeImage()" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                        @endif
                    </div>
                    <!--end::Image input-->
                </div>
                @error('imageTmp') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror            
                <!-- Progress Bar -->
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            <!--end::Image input wrapper-->
            <div
                class="col-lg-6 {{ $banner->type == 'Video' ? 'd-block' : 'd-none' }}"
                x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!--begin::Label-->
                <label class="fs-6 fw-bold mb-2">
                    <span class="">Video</span>
                </label>
                <!--end::Label-->
                <!--begin::Image input wrapper-->
                <div class="mt-1">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline">
                        <!--begin::Preview existing avatar-->
                        <video 
                            class="w-200px h-125px" controls
                            @if ($videoTmp)
                                src='{{ $videoTmp->temporaryUrl() }}'
                            @else
                                src='{{ $banner->videoPreview() }}'
                            @endif
                        ></video>
                        <!--end::Preview existing avatar-->
                        <!--begin::Edit-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow image-input" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Cambiar video">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input wire:model.defer="videoTmp" class="d-none" type="file"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit-->
                        @if ($videoTmp || $banner->video)
                        <!--begin::Remove-->
                        <span wire:click.prevent="removeVideo()" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                        @endif
                    </div>
                    <!--end::Image input-->
                </div>
                @error('imageTmp') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror            
                <!-- Progress Bar -->
                <div x-show="isUploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="required">Orden</span>
            </label>
            <input required wire:model.defer="banner.order" class="form-control form-control-solid @error('banner.order') 'invalid-feedback' @enderror" placeholder="Ej: 1" name="" />
            @error('banner.order') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="required">Módulo</span>
            </label>
            <select wire:model.defer="banner.module_web_id" class="form-select form-select-solid @error('banner.module_web_id') 'invalid-feedback' @enderror">
                <option value="">Selecciona un tipo</option>
                @foreach ($modulesWeb as $moduleWeb)
                    <option value="{{ $moduleWeb->id }}">{{ $moduleWeb->name }}</option>
                @endforeach
            </select>
            @error('banner.module_web_id') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="">Titulo</span>
            </label>
            <input type="text" wire:model.defer="banner.title" class="form-control form-control-solid @error('banner.title') 'invalid-feedback' @enderror" placeholder="Ej: Unete a {{ config('app.name') }}" name="" />
            @error('banner.title') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
            <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="">Subtitulo</span>
            </label>
            <input type="text" wire:model.defer="banner.subtitle" class="form-control form-control-solid @error('banner.subtitle') 'invalid-feedback' @enderror" placeholder="" name="" />
            @error('banner.subtitle') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="">URL</span>
            </label>
            <input type="url" wire:model.defer="banner.btn_url" class="form-control form-control-solid @error('banner.btn_url') 'invalid-feedback' @enderror" placeholder="" name="" />
            @error('banner.btn_url') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <label class="fs-6 fw-bold form-label mb-2">
                <span class="">Texto de boton</span>
            </label>
            <input type="text" wire:model.defer="banner.btn_text" class="form-control form-control-solid @error('banner.btn_text') 'invalid-feedback' @enderror" placeholder="" name="" />
            @error('banner.btn_text') <small  class="form-text text-danger" role="alert">{{ $message }}</small> @enderror
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center pt-15">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><i class="fa fa-arrow-left"></i></button>
            <button wire:loading.attr="disabled" wire:target="{{ $method }}" type="submit" class="btn btn-primary">
                <span class="indicator-label">Guardar cambios</span>
                <span wire:loading wire:target="{{ $method }}" class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
