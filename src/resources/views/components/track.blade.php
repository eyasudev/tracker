<div>
    <div class="row" style="overflow: scroll">
        @foreach($tops as $top)
            <div class="col">
            <div class="card mb-3 text-white" style="background-color: #231f32">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start"
                             style="width: 223px; height: 225px"
                             src="{{$top['offer']['image']}}"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-opacity-50">
                            <h4 class="text-warning">PRIME</h4>
                            <a href="/offers/show?id={{$top['offer']['id']}}" style="text-decoration: none">
                                <h3 class="card-title text-white">
                                    {{ $top['offer']['manufacture_id'] . ' ' . $top['offer']['model_id'] }}
                                </h3>
                            </a>
                            <p class="card-text">{{ '$' . $top['offer']['price'] }}</p>
                            <p class="card-text"><small class="text-muted">{{ $top['offer']['city'] }}</small></p>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 text-white" v-else style="width: auto; margin-right: 1em;  background-color: #231f32">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            class="img-fluid rounded-start"
                            style="width: 100%; height: 100%; object-fit: cover;"
                            src="{{$top['offer']['image']}}"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-opacity-50">
                            <a href="/offers/show?id={{$top['offer']['id']}}" style="text-decoration: none">
                                <h3 class="card-title text-white">
                                    {{ $top['offer']['manufacture_id'] . ' ' . $top['offer']['model_id'] }}
                                </h3>
                            </a>
                            <p class="card-text">{{ '$' . $top['offer']['price'] }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    {{ $top['offer']['city'] }}
                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-white">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-eye"
                                        viewBox="0 0 16 16"
                                    >
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                    {{$top['views']}}
                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-eye-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
    <div class="row" style="overflow: scroll">
        @foreach($topsIp as $topIp)
            <div class="col">
            <div class="card mb-3 text-white" style=" background-color: #231f32">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start"
                             style="width: 223px; height: 225px"
                             src="{{$topIp['offer']['image']}}"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-opacity-50">
                            <h4 class="text-warning">PRIME</h4>
                            <a href="'/offers/show'+'?'+'id='{{$topIp['offer']['id']}}" style="text-decoration: none">
                                <h3 class="card-title text-white">
                                    {{ $topIp['offer']['manufacture_id'] . ' ' . $topIp['offer']['model_id'] }}
                                </h3>
                            </a>
                            <p class="card-text">{{ '$' . $topIp['offer']['price'] }}</p>
                            <p class="card-text"><small class="text-muted">{{ $topIp['offer']['city'] }}</small></p>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 text-white" v-else style="width: auto; margin-right: 1em;  background-color: #231f32">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img
                            class="img-fluid rounded-start"
                            style="width: 100%; height: 100%; object-fit: cover;"
                            src="{{$topIp['offer']['image']}}"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-opacity-50">
                            <a href="/offers/show?id={{$topIp['offer']['id']}}" style="text-decoration: none">
                                <h3 class="card-title text-white">
                                    {{ $topIp['offer']['manufacture_id'] . ' ' . $topIp['offer']['model_id'] }}
                                </h3>
                            </a>
                            <p class="card-text">{{ '$' . $topIp['offer']['price'] }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    {{ $topIp['offer']['city'] }}
                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-white">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-eye"
                                        viewBox="0 0 16 16"
                                    >
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>

                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-eye-fill"
                                        viewBox="0 0 16 16"
                                    >
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>

                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
</div>
