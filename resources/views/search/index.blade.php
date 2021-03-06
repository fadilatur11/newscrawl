<x-headerhome />
<div class="view view-main view-init ios-edges" data-url="/">
    <!-- navbar -->
    <div class="page page-home">
        <div class="page-content">
            <!-- navbar top -->
            <div class="navbar-top">
                <div class="container">
                    <div class="row">
                        <div class="col-100">
                            <div class="text-align-center">
                                <a href="{{url('/')}}" class="external">
                                    <h3>ngabarin.id</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-100 mt--10">
                            <x-search />
                        </div>
                    </div>
                </div>
            </div>
            <!-- end navbar top -->

            <!-- post -->
            <div class="post searchsegment">
                <div class="container">
                    @foreach ($search as $data)
                    <div class="row">
                        <div class="col-50">
                            <div class="content">
                                <a class="external"  href="javascript:void(0)" onclick="showOptionRead('{{ url('/detail/'.$data['id'].'/'.$data['slug']) }}')">
                                    <img alt="{{$data['title']}}" class="lazy-fade-in lazy-loaded" src="{{$data['image']}}" onerror="this.onerror=null; this.src='{{ asset("/images/404.jpg") }}'">
                                </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="content-text">
                                <span>{{$data['author']}}</span>
                                <a class="external"  href="javascript:void(0)" onclick="showOptionRead('{{ url('/detail/'.$data['id'].'/'.$data['slug']) }}')">
                                    <h5>{{$data['title']}}</h5>
                                </a>
                                <p class="date">{{Carbon\Carbon::parse(date('Y-m-d',$data['published_at']))->diffForHumans()}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="setmore"></div>
                    <br>
                    <div class="link-more">
                        <input type="hidden" id="keywords" value="{{$keywords}}">
                        <input type="hidden" id="baseurl" value="{{url('/')}}">
                        @if ($searchCount > 5)
                        <button type="button" class="button button-custom loadmore">Selanjutnya</button>
                        @endif
                        <!-- offset -->
                        <input type="hidden" id="more" value="6">
                        <!-- end offset -->
                    </div>
                </div>

            </div>
        </div>
        <!-- end post -->

        <div class="block-modal">
            <div class="block-modal__option">
                <div class="block-modal__option-box">
                    <div class="block-modal__option-box-container">
                        <div class="block-modal__option-box-container-title">
                            Kamu ingin baca dimana ?
                        </div>
                        <div class="block-modal__option-box-container-action">
                            <div>
                                <a class="block-modal__option-box-container-action-button external" href="https://google.com">Baca Instan</a>
                            </div>
                            <div>
                                <a class="block-modal__option-box-container-action-button block-modal__option-box-container-action-button--disabled external" target="blank">Baca Sumber</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<x-footer />
<script src="{{url('/assets')}}/js/search.js"></script>
