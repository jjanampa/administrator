<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
    <!--begin::Content-->
    <!--begin::Card-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input wire:model="search" type="search" class="form-control form-control-solid w-250px ps-14" placeholder="Buscar..." />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                @include('admin.setting.shipping-zone.create')
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0" >
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">Zona</th>
                            <th class="min-w-100px">Precio</th>
                            <th class="min-w-100px">Gratis mayor a</th>
                            <th class="min-w-100px">Estados</th>
                            <th class="min-w-100px">Clases de envío</th>
                            <th class="min-w-100px">CP's</th>
                            <th class="min-w-100px">Acciones</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        <tr>
                            <td>Fuera de zona</td>
                            <td>${{ number_format(config('shipping.price_default'), 2) }}</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>
                                @include('admin.setting.shipping-zone.price-default.edit')
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @foreach ($shippingZones as $shippingZone)
                        <tr>
                            <td>{{ $shippingZone->name }}</td>
                            <td>{{ $shippingZone->priceToString() }}</td>
                            <td>{{ $shippingZone->priceFreeOverToString() }}</td>
                            <td>
                                @foreach ($shippingZone->states as $estate)
                                <a class="badge badge-light-primary fs-7 m-1">{{ $estate->name }}</a>    
                                @endforeach
                            </td>
                            <td>
                                @foreach ($shippingZone->shippingClasses as $shippingClass)
                                <a class="badge badge-light-info fs-7 m-1">{{ $shippingClass->name }} ${{ number_format($shippingClass->pivot->price, 2) }}</a>    
                                @endforeach
                            </td>
                            <td>
                                {{ $shippingZone->zip_codes }}
                            </td>
                            <td>
                                @include('admin.setting.shipping-zone.edit')
                                @include('admin.setting.shipping-zone.delete')
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
            <!--end::Table-->
            {{ $shippingZones->links() }}
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    @push('footer')
    <script>
            Livewire.on('render', function(){
                $('.modal').modal('hide');
            });
    </script>
    @endpush
    <!--end::Content-->
</div>