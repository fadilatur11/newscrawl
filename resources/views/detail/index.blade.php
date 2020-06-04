@section('konten')
<!-- HTML Meta Tags -->
<title>{{ucwords($detail['title'])}}</title>
<meta name="title" content="{{ucwords($detail['title'])}}">
<meta name="description" content="{!! strip_tags(Str::words($detail['content'],8)) !!}">
<meta name="keywords" content="{{ucwords($detail['title'])}}">
<meta name="robots" content="index, follow, noodp">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{ucwords($detail['title'])}}">
<meta itemprop="description" content="{!! strip_tags(Str::words($detail['content'],8)) !!}">
<meta itemprop="image" content="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ucwords($detail['title'])}}">
<meta property="og:description" content="{!! strip_tags(Str::words($detail['content'],8)) !!}">
<meta property="og:image" content="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}">
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{url()->current()}}">
<meta name="twitter:description" content="{!! strip_tags(Str::words($detail['content'],8)) !!}">
<meta name="twitter:image" content="{{$detail['image']}}">
@endsection
<x-header/>
    <div class="page page-current">
        <div class="page-content">
            <a href="{{url('/')}}" class="external back nav-back">
                <i class="f7-icons">arrow_left</i>
             </a>
                <div class="single-post">
                    <div class="header">
                        <img src="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}" onerror="this.onerror=null; this.src='{{ asset("/images/404.jpg") }}'">
                    </div>
                    <div class="wrap-content">
                        <h4>{{ucwords($detail['title'])}}</h4>
                        <p><div class="sharethis-inline-share-buttons"></div></p>
                        <p class="date">Tanggal : {{ date('Y-m-d', $detail['published_at']) }}</p>
                        <p>Penulis : <b>{{ucwords($detail['author'])}}</b></p>
                        <input type="hidden" id="publish" value="{{ date('Y-m-d', $detail['published_at']) }}">
                    <div class="desc">
                    @php $kalimat = explode("<p>",$detail['content']);
                    $length = count($kalimat);
                    @endphp
                        <p>
                        @for ($i = 0; $i < 3; $i++)
                        {!! $kalimat[$i] !!}
                        @endfor
                        </p>
                        <p class="readother"><b>Baca Juga :</b><a href="javascript:void(0)"
                                    onclick="showOptionRead('{{ url('/detail/'.$bacajuga['id'].'/'.$bacajuga['slug']) }}', '{{ $bacajuga['link'] }}')"> {!! $bacajuga['title'] !!}</a></p>
                        @for ($u = 3; $u < 5; $u++)
                        {!! $kalimat[$u] !!}
                        @endfor
                        <p class="readother"><b>Baca Juga :</b><a href="javascript:void(0)"
                                    onclick="showOptionRead('{{ url('/detail/'.$bacajuga2['id'].'/'.$bacajuga2['slug']) }}', '{{ $bacajuga2['link'] }}')"> {!! $bacajuga2['title'] !!}</a></p>
                        @for ($a = 5; $a < $length; $a++)
                        {!! $kalimat[$a] !!}
                        @endfor
                        
                        <!-- modal -->
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
                    <!-- endmodal -->

                    </div>
                    <input type="hidden" id="deskripsi" value="{!! str_replace('<p>','',Str::words($detail['content'],8)) !!}">
                    <input type="hidden" id="thumbnail" value="{{$detail['image']}}">
                    <input type="hidden" id="title" value="{{ucwords($detail['title'])}}">
                    <input type="hidden" id="author" value="{{ucwords($detail['author'])}}">
                    </div>
                </div>

        </div>
    </div>
<x-footer/>
<script>
$('.block-modal__option-box-container-action-button--disabled').click(function () {
        $('.block-modal__option').css('display', 'none')
    })

    function showOptionRead(instant, source) {
    $('.block-modal__option-box-container-action-button').attr('href', instant)
    $('.block-modal__option-box-container-action-button--disabled').attr('href', source)
    $('.block-modal__option').css('display', 'flex')
}
    </script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=59c899da48a443001140a81b&product=inline-share-buttons' async='async'></script>