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
            <!-- slider -->
            <div class="slider-home2">
                <div class="container">
                    <div class="swiper-container swiper-init" data-prevent-clicks="false" data-pagination='{"el": ".swiper-pagination"}' data-space-between="10">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            @foreach($slider as $getslider)
                            <div class="swiper-slide">
                                <img src="{{$getslider['image']}}" alt="{{$getslider['title']}}" onerror="this.onerror=null; this.src='{{ asset("/images/404.jpg") }}'">
                                <div class="mask"></div>
                                <div class="caption">
                                    <span>{{$getslider['author']}}</span>
                                    <a class="external" href="javascript:void(0)"
                                        onclick="showOptionRead('{{ url('/detail/'.$getslider['id'].'/'.$getslider['slug']) }}', '{{ $getslider['link'] }}')">
                                            <h4>{{$getslider['title']}}</h4>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider -->
            <!-- post -->
            <div class="post segments">
                <div class="container">
                    @foreach($getarticle as $article)
                    <div class="row">
                        <div class="col-50">
                            <div class="content">
                                <a class="external" href="javascript:void(0)"
                                    onclick="showOptionRead('{{ url('/detail/'.$article['id'].'/'.$article['slug']) }}', '{{ $article['link'] }}')">
                                        <img src="{{$article['image']}}" alt="{{$article['title']}}" onerror="this.onerror=null; this.src='{{ asset("/images/404.jpg") }}'">
                                </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="content-text">
                                <span>{{$article['author']}}</span>
                                <a class="external" href="javascript:void(0)"
                                    onclick="showOptionRead('{{ url('/detail/'.$article['id'].'/'.$article['slug']) }}', '{{ $article['link'] }}')">
                                        <h5>{{$article['title']}}</h5>
                                </a>
                                <p class="date">{{Carbon\Carbon::parse(date('Y-m-d',$article['published_at']))->diffForHumans()}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="setmore"></div>
                    <br>
                    <div class="link-more">
                        <button type="button" class="button button-custom loadmore">Selanjutnya</button>
                        <input type="hidden" id="more" value="6">
                    </div>
                </div>
            </div>
            <!-- end post -->
        </div>

        <div class="block-modal">
            <div class="block-modal__option">
                <div class="block-modal__option-box">
                    <div class="block-modal__option-box-container">
                        <div class="block-modal__option-box-container-title">
                            Kamu ingin baca dimana ?
                        </div>
                        <div class="block-modal__option-box-container-action">
                            <div>
                                <a class="block-modal__option-box-container-action-button block-modal__option-box-container-action-button--enabled external">Baca Instan</a>
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
    <script src="{{url('/assets')}}/js/datascript.js"></script>
