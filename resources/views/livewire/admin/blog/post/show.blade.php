<!--begin::Post card-->
<div class="card">
    <!--begin::Body-->
    <div class="card-body p-lg-20 pb-lg-0">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid me-xl-15">
                <!--begin::Post content-->
                <div class="mb-17">
                    <!--begin::Wrapper-->
                    <div class="mb-8">
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-6">
                            <!--begin::Item-->
                            <div class="me-9 my-1">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bolder text-gray-400">{{ $post->dateToString() }}</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="me-9 my-1">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bolder text-gray-400"><a href="#comments">{{ $post->comments()->count() }} Comentarios</a></span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="me-9 my-1">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"/>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <span class="fw-bolder text-gray-400"><a href="#views">{{ $post->viewUniques() }} Vistas</a> </span>
                                <!--end::Label-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Title-->
                        <a class="text-dark text-hover-primary fs-2 fw-bolder">{{ $post->name }}
                        <!--end::Title-->
                        <!--begin::Container-->
                        <div class="overlay mt-8">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('{{ $post->imagePreview() }}')"></div>
                            <!--end::Image-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Description-->
                    <div class="fs-5 fw-bold text-gray-600">
                        <!--begin::Text-->
                        {{  $post->fragment  }}
                        <hr>
                        <!--end::Text-->
                        <!--begin::Text-->
                        {!! $post->body !!}
                        <!--end::Text-->
                    </div>
                    <!--end::Description-->
                    @if ($post->user)
                    <!--begin::Block-->
                    <div class="d-flex align-items-center justify-content-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                        <!--begin::Section-->
                        <div class="text-center flex-shrink-0 me-7 me-lg-13">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-70px symbol-circle mb-2">
                                <img loading="lazy" src="{{ $post->user->imagePreview() }}" class="" alt="{{ $post->user->name }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="mb-0">
                                <a href="{{ route('admin.user.show', $post->user) }}" class="text-gray-700 fw-bolder text-hover-primary">{{ $post->user->name }}</a>
                                @foreach ($post->user->roles as $role)
                                <span class="text-gray-400 fs-7 fw-bold d-block mt-1">{{ $role->name }}</span>
                                @endforeach
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Block-->
                    @endif
                </div>
                <!--end::Post content-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                <!--begin::Catigories-->
                <div class="mb-16">
                    <h4 class="text-black mb-7">Categorías</h4>
                    @foreach ($post->blogCategories as $category)
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a class="text-muted pe-2">{{ $category->name }}</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">{{ count($category->blogPosts) }}</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                    @endforeach                    
                </div>
                <!--end::Catigories-->
                <!--begin::Etiquetas-->
                <div class="mb-16">
                    <h4 class="text-black mb-7">Etiquetas</h4>
                    @foreach ($post->blogTags as $tag)
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a class="text-muted pe-2">{{ $tag->name }}</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">{{ count($tag->blogPosts) }}</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                    @endforeach                    
                </div>
                <!--end::Etiquetas-->
                <!--begin::Recent posts-->
                <div class="m-0">
                    <h4 class="text-black mb-7">Post recientes</h4>
                    @foreach ($recentPosts as $recentPost)
                        <!--begin::Item-->
                        <div class="d-flex flex-stack mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 me-4">
                                <div class="symbol-label" style="background-image: url('{{ $recentPost->imagePreview() }}')"></div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="m-0">
                                <a href="{{ route('admin.blog.post.show', $recentPost) }}" class="text-dark fw-bolder text-hover-primary">{{ $recentPost->name }}</a>
                                <span class="text-gray-600 fw-bold d-block pt-1 fs-7">{{ substr($recentPost->fragment, 0, 50) }}...</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Recent posts-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
        <!--begin::Graphic posts-->
        <div class="mb-17" id="views">
            <div class="m-0">
                <h4 class="text-black mb-7">Estadistica</h4>
                <div class="" style="height: 32rem;">
                    <livewire:livewire-line-chart :line-chart-model="$lineChartModel" />
                </div>  
            </div>
        </div>
        <!--end::Graphic posts-->
        <!--begin::Section-->
        <div class="mb-17" id="comments">
            <!--begin::Content-->
            <div class="d-flex flex-stack mb-5">
                <!--begin::Title-->
                <h3 class="text-dark">Comentarios</h3>
                <!--end::Title-->
            </div>
            <!--end::Content-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mb-9"></div>
            <!--end::Separator-->
            <!--begin::Row-->
            <div class="row g-10">
                <!--begin::Col-->
                <div class="col-lg-12 justify-content-between d-flex flex-column">
                    @forelse ($comments as $comment)
                        @livewire('admin.blog.post.comment', ['comment' => $comment], key($comment->id))
                    @empty
                        <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-info me-4 mb-5 mb-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor"></path>
                                    <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <!--begin::Title-->
                                <h5 class="mb-1">Sin comentarios</h5>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <span>Aún no se tienen ningún comentario</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Close-->
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="bi bi-x fs-1 text-primary"></i>
                            </button>
                            <!--end::Close-->
                        </div>
                        <!--end::Alert-->
                    @endforelse
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Section-->
    </div>
    <!--end::Body-->
</div>
<!--end::Post card-->