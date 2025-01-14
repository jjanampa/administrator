<!--begin::Update--> 
<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_show_email_web_{{ $emailWeb->id }}">
    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
    <span class="svg-icon svg-icon-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</button>
<!--end::Update-->

<!--begin::Modal - Update role-->
<div wire:ignore.self class="modal fade" id="kt_modal_show_email_web_{{ $emailWeb->id }}" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">{{ $emailWeb->subject }}</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 my-7">
                <p>Nombre: {{ $emailWeb->name }}</p>
                <p>Correo: <i class="fa fa-envelope"></i> <a href="mailto:{{ $emailWeb->email }}">{{ $emailWeb->email }}</a></p>
                <p>Asunto: {{ $emailWeb->subject }}</p>
                <p>Teléfono: <i class="fa fa-phone"></i> <a href="tel:{{ $emailWeb->phone }}" target="_blank" rel="noopener noreferrer">{{ $emailWeb->phone }}</a></p>
                <p>WhatsApp: <i class="fab fa-whatsapp"></i> <a href="https://wa.me/+52{{ $emailWeb->phone }}" target="_blank" rel="noopener noreferrer">https://wa.me/+52{{ $emailWeb->phone }}</a></p>
                <p>Contenido: {{ $emailWeb->body }}</p>
                <p>Conversión: {!! $emailWeb->conversionToString() !!}</p>
                <p>Fecha: {{ $emailWeb->dateToString() }}</p>
                <!--begin::Actions-->
                <div class="text-center pt-15"> 
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"><i class="fa fa-arrow-left"></i></button>
                    <button wire:click="noAffiliated('{{ $emailWeb->id }}')" wire:loading.attr="disabled" wire:target="noAffiliated('{{ $emailWeb->id }}')" class="btn btn-danger">
                        <span class="indicator-label">No conversión</span>
                        <span wire:loading wire:target="noAffiliated('{{ $emailWeb->id }}')" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </button>
                    <button wire:click="yesAffiliated('{{ $emailWeb->id }}')" wire:loading.attr="disabled" wire:target="yesAffiliated('{{ $emailWeb->id }}')" class="btn btn-success">
                        <span class="indicator-label">Si conversión</span>
                        <span wire:loading wire:target="yesAffiliated('{{ $emailWeb->id }}')" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </button>
                    <button wire:click="wattingAffiliated('{{ $emailWeb->id }}')" wire:loading.attr="disabled" wire:target="wattingAffiliated('{{ $emailWeb->id }}')" class="btn btn-warning">
                        <span class="indicator-label">En espera</span>
                        <span wire:loading wire:target="wattingAffiliated('{{ $emailWeb->id }}')" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Update role-->
