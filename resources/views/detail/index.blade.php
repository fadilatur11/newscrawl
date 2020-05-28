@section('konten')
<!-- HTML Meta Tags -->
<title>{{ucwords($detail['title'])}}</title>
<meta name="title" content="{{ucwords($detail['title'])}}">
<meta name="description" content="{!! str_replace('<p>','',Str::words($detail['content'],8)) !!}">
<meta name="keywords" content="{{ucwords($detail['title'])}}">
<meta name="robots" content="index, follow, noodp">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{ucwords($detail['title'])}}">
<meta itemprop="description" content="{!! str_replace('<p>','',Str::words($detail['content'],8)) !!}">
<meta itemprop="image" content="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ucwords($detail['title'])}}">
<meta property="og:description" content="{!! str_replace('<p>','',Str::words($detail['content'],8)) !!}">
<meta property="og:image" content="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}">
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{url()->current()}}">
<meta name="twitter:description" content="{!! str_replace('<p>','',Str::words($detail['content'],8)) !!}">
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
                        <img src="{{$detail['image']}}" alt="{{ucwords($detail['title'])}}">
                    </div>
                    <div class="wrap-content">
                        <h4>{{ucwords($detail['title'])}}</h4>
                        <p class="date">Tanggal : {{ date('Y-m-d', $detail['published_at']) }}</p>
                        <p>Penulis : <b>{{ucwords($detail['author'])}}</b></p>
                        <input type="hidden" id="publish" value="{{ date('Y-m-d', $detail['published_at']) }}">
                    <div class="desc">
                        <p>{!! $detail['content'] !!}</p>
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
