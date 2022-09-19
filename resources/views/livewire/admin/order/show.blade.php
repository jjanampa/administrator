<div>  
   <!--begin::Order details page-->
   <div class="d-flex flex-column gap-7 gap-lg-10">
        <div wire:ignore class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-lg-n2 me-auto">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_general">General</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_detail">Info orden</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
        </div>
        <!--begin::Tab content-->
        <div class="tab-content">
            <!--begin::Tab pane-->
            <div wire:ignore.self class="tab-pane fade show active" id="kt_ecommerce_sales_order_general" role="tab-panel">
                <!--begin::Orders-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                     <!--begin::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Número (#{{ $order->number }})</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                            <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="black" />
                                                            <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Creado</div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->created_at }}</td>
                                            </tr>
                                            <!--end::Date-->
                                            <!--begin::Payment method-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                            <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                            <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Metodo de pago</div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->payment_method }}
                                                </td>
                                            </tr>
                                            <!--end::Payment method-->
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                            <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                            <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Pago status</div>
                                                </td>
                                                <td class="fw-bolder text-end">{!! $order->paymentStatusToString() !!}</td>
                                            </tr>
                                            <!--end::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com009.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor"/>
                                                        <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Svg Icon-->Status</div>
                                                </td>
                                                <td class="fw-bolder text-end">{!! $order->statusToString() !!}</td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->
                        <!--begin::Customer details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Cliente</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <!--begin::Customer name-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                            <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Usuario</div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        @if ($order->user)
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                                <a href="{{ route('admin.user.show', $order->user) }}">
                                                                    <div class="symbol-label">
                                                                        <img loading="lazy" src="{{ $order->user->imagePreview() }}" alt="{{ $order->user->name }}" class="w-100" />
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Name-->
                                                            <a href="{{ route('admin.user.show', $order->user) }}" class="text-gray-600 text-hover-primary">{{ $order->user->name }}</a>
                                                            <!--end::Name-->
                                                        @else
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                                <div class="symbol-label">
                                                                    <img loading="lazy" src="{{ asset('assets/admin/media/avatars/blank.png') }}" alt="{{ $order->shippingAddress->name }}" class="w-100" />
                                                                </div>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Name-->
                                                            <a class="text-gray-600 text-hover-primary">{{ $order->shippingAddress->name }}</a>
                                                            <!--end::Name-->
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Customer name-->
                                            <!--begin::Customer email-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Corrreo</div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <a href="mailto:{{ $order->shippingAddress->email }}" class="text-gray-600 text-hover-primary">{{ $order->shippingAddress->email }}</a>
                                                </td>
                                            </tr>
                                            <!--end::Payment method-->
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                                                    <span class="svg-icon svg-icon-2 me-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="black" />
                                                            <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Teléfono</div>
                                                </td>
                                                <td class="fw-bolder text-end"><a href="tel:{{ $order->shippingAddress->phone }}">{{ $order->shippingAddress->phone }}</a></td>
                                            </tr>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <i class="fab fa-whatsapp fa-1x"></i>
                                                        </span>
                                                        WhatsApp
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end"><a href="https://wa.me/+52{{ $order->shippingAddress->phone }}">https://wa.me/+52{{ $order->shippingAddress->phone }}</a></td>
                                            </tr>
                                            <!--end::Date-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--end::Customer details-->
                        <!--begin::Payment address-->
                        <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                            <!--begin::Background-->
                            <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                <img loading="lazy" src="assets/media/icons/duotune/ecommerce/ecm001.svg" class="w-175px" />
                            </div>
                            <!--end::Background-->
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Dirección de facturación</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                @if ($order->orderInvoice)
                                    <strong>País:</strong> {{ $order->orderInvoice->shippingAddress->state->country->name }}, 
                                    <strong>Estado:</strong> {{ $order->orderInvoice->shippingAddress->state->name }}, <br>
                                    <strong>Municipio:</strong> {{ $order->orderInvoice->shippingAddress->municipality }},
                                    <strong>Colonia:</strong> {{ $order->orderInvoice->shippingAddress->colony }}, <br>
                                    <strong>Codigo postal:</strong> {{ $order->orderInvoice->shippingAddress->zip_code }},
                                    <strong>Calle:</strong> {{ $order->orderInvoice->shippingAddress->street }}, <br>
                                    <strong>Número interior:</strong> {{ $order->orderInvoice->shippingAddress->street_number_int }}, 
                                    <strong>Número exterior:</strong> {{ $order->orderInvoice->shippingAddress->street_number_ext }}, <br>
                                    <strong>Entre calles:</strong> {{ $order->orderInvoice->shippingAddress->street_between }},
                                    <strong>Referencias:</strong> {{ $order->orderInvoice->shippingAddress->street_references }}, <br>
                                    <strong>Empresa:</strong> {{ $order->orderInvoice->shippingAddress->company }}, 
                                    <strong>A nombre de:</strong> {{ $order->orderInvoice->shippingAddress->name }}, <br>
                                    <strong>Teléfono:</strong> {{ $order->orderInvoice->shippingAddress->phone }}, 
                                    <strong>Correo:</strong> {{ $order->orderInvoice->shippingAddress->email }}
                                @else
                                    Sin información
                                @endif
                                
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Payment address-->
                        <!--begin::Shipping address-->
                        <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                            <!--begin::Background-->
                            <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                <img loading="lazy" src="assets/media/icons/duotune/ecommerce/ecm006.svg" class="w-175px" />
                            </div>
                            <!--end::Background-->
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Dirección de envío</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                @if ($order->shippingAddress)
                                    <strong>País:</strong> {{ $order->shippingAddress->state->country->name }}, 
                                    <strong>Estado:</strong> {{ $order->shippingAddress->state->name }}, <br>
                                    <strong>Municipio:</strong> {{ $order->shippingAddress->municipality }},
                                    <strong>Colonia:</strong> {{ $order->shippingAddress->colony }}, <br>
                                    <strong>Codigo postal:</strong> {{ $order->shippingAddress->zip_code }},
                                    <strong>Calle:</strong> {{ $order->shippingAddress->street }}, <br>
                                    <strong>Número interior:</strong> {{ $order->shippingAddress->street_number_int }}, 
                                    <strong>Número exterior:</strong> {{ $order->shippingAddress->street_number_ext }}, <br>
                                    <strong>Entre calles:</strong> {{ $order->shippingAddress->street_between }},
                                    <strong>Referencias:</strong> {{ $order->shippingAddress->street_references }}, <br>
                                    <strong>Empresa:</strong> {{ $order->shippingAddress->company }}, 
                                    <strong>A nombre de:</strong> {{ $order->shippingAddress->name }}, <br>
                                    <strong>Teléfono:</strong> {{ $order->shippingAddress->phone }}, 
                                    <strong>Correo:</strong> {{ $order->shippingAddress->email }}
                                @else
                                    Sin información
                                @endif
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Shipping address-->
                    </div>
                    <!--begin::Product List-->
                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Orden #{{ $order->number }}</h2>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button onclick="window.print()" class="btn btn-light-primary ">Imprimir</button>
                            </div>
                            
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-175px">Producto</th>
                                            <th class="min-w-100px text-end">SKU</th>
                                            <th class="min-w-70px text-end">Cantidad</th>
                                            <th class="min-w-100px text-end">Precio</th>
                                            <th class="min-w-100px text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($order->products as $product)
                                            <!--begin::Products-->
                                            <tr>
                                                <!--begin::Product-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="{{ route('admin.catalog.product.edit', $product) }}" class="symbol symbol-50px">
                                                            <span class="symbol-label" style="background-image:url({{ $product->imagePreview() }});"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                        <div class="ms-5">
                                                            <a href="{{ route('admin.catalog.product.edit', $product) }}" class="fw-bolder text-gray-600 text-hover-primary">Product 1</a>
                                                            @if ($product->pivot->color)
                                                                <div class="fs-7 text-muted">Color: {{ $product->pivot->color }}</div>
                                                            @endif
                                                            @if ($product->pivot->size)
                                                                <div class="fs-7 text-muted">Medida: {{ $product->pivot->size }}</div>
                                                            @endif
                                                        </div>                                                
                                                    </div>
                                                </td>
                                                <!--end::Product-->
                                                <!--begin::SKU-->
                                                <td class="text-end">{{ $product->sku }}</td>
                                                <!--end::SKU-->
                                                <!--begin::Quantity-->
                                                <td class="text-end">{{ $product->pivot->quantity }}</td>
                                                <!--end::Quantity-->
                                                <!--begin::Price-->
                                                <td class="text-end">${{ number_format($product->pivot->price, 2) }}</td>
                                                <!--end::Price-->
                                                <!--begin::Total-->
                                                <td class="text-end">${{ number_format($product->pivot->subtotal, 2) }}</td>
                                                <!--end::Total-->
                                            </tr>
                                            <!--end::Products-->
                                        @endforeach
                                        <!--begin::Subtotal-->
                                        <tr>
                                            <td colspan="4" class="text-end">Subtotal</td>
                                            <td class="text-end">{{ $order->subtotalToString() }}</td>
                                        </tr>
                                        <!--end::Subtotal-->
                                        <!--begin::Shipping-->
                                        <tr>
                                            <td colspan="4" class="text-end">Envío</td>
                                            <td class="text-end">{{ $order->shippingPriceToString() }}</td>
                                        </tr>
                                        <!--end::Shipping-->
                                        <!--begin::Grand total-->
                                        <tr>
                                            <td colspan="4" class="fs-3 text-dark text-end">Total</td>
                                            <td class="text-dark fs-3 fw-boldest text-end">{{ $order->totalToString() }}</td>
                                        </tr>
                                        <!--end::Grand total-->
                                    </tbody>
                                    <!--end::Table head-->
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Product List-->
                </div>
                <!--end::Orders-->
            </div>
            <!--end::Tab pane-->
            <!--begin::Tab pane-->
            <div wire:ignore.self class="tab-pane fade" id="kt_ecommerce_sales_order_detail" role="tab-panel">
                <!--begin::Orders-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::Order history-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Identificador de pago</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            @if ($order->payment_id)
                                <h4><a href="#" data-bs-toggle="modal" data-bs-target="#payment_method_details">{{ $order->payment_id }}</a></h4>
                            @else
                                Ninguno
                            @endif
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order history-->
                    <!--begin::Order history-->
                    <div class="card card-flush py-4 flex-row-fluid">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Correo enviado de confirmación</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                @if ($order->send_email)
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <div class="fs-6 text-gray-700">
                                                <strong class="me-1">Correcto</strong> El correo electronico de confirmación fue enviado con éxito</div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                @else
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <div class="fs-6 text-gray-700">
                                                    <strong class="me-1">Información!</strong> Al parecer hubo un error al intentar envíar el correo: <br>
                                                    {{ $order->send_email_error }}
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <button wire:click="sendEmail" wire:loading.attr="disabled" wire:target="sendEmail" class="btn btn-primary">
                                        <span class="indicator-label">Volver a envíar correo</span>
                                        <span wire:loading wire:target="sendEmail" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </button>
                                @endif
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order history-->
                    <form class="form" wire:submit.prevent="update">
                        <!--begin::Order data-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pago status</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <select wire:model.defer="order.payment_status" class="form-select mb-2 @error('order.payment_status') 'invalid-feedback' @enderror">
                                            <option value="Aprobado">Aprobado</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Rechazado">Rechazado</option>
                                        </select>
                                        <!--end::Select2-->
                                        @error('order.payment_status')<small class="form-text text-danger" role="alert">{{ $message }}</small>@enderror
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <div class="col-lg-6">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Status</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Select2-->
                                        <select wire:model.defer="order.status" class="form-select mb-2 @error('order.status') 'invalid-feedback' @enderror">
                                            <option value="Procesando">Procesando</option>
                                            <option value="Completado">Completado</option>
                                            <option value="Cancelado">Cancelado</option>
                                        </select>
                                        <!--end::Select2-->
                                        @error('order.status')<small class="form-text text-danger" role="alert">{{ $message }}</small>@enderror
                                    </div>
                                    <!--end::Card body-->
                                </div>
                            </div>
                            
                        </div>
                        <!--end::Order data-->
                        <!--end:: Save changes-->
                        <div class="d-flex justify-content-end py-5">
                            <!--begin::Button-->
                            <button wire:loading.attr="disabled" wire:target="update" type="submit" class="btn btn-primary">
                                <span class="indicator-label">Actualizar pedido</span>
                                <span wire:loading wire:target="update" class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end:: Save changes-->
                    </form>
                </div>
                <!--end::Orders-->
            </div>
            <!--end::Tab pane-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Order details page-->

    <!--begin::Modal -->
    <div wire:ignore.self class="modal fade" id="payment_method_details" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Detalles de pago</h2>
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
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    @php
                        $paymentData = json_decode($order->payment_data);
                    @endphp
                   <pre> @json($paymentData, JSON_PRETTY_PRINT)</pre>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add permissions-->
</div>