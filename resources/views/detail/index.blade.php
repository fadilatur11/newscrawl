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
                    <input type="hidden" id="deskripsi" value="{!! str_replace('<p>','',Str::words($detail['content'],17,'....')) !!}">
                    <input type="hidden" id="thumbnail" value="{{$detail['image']}}&w=800&zc=1">
                    <input type="hidden" id="title" value="{{ucwords($detail['title'])}}">
                    <input type="hidden" id="author" value="{{ucwords($detail['author'])}}">
                    </div>
                </div>
        </div>
    </div>
<x-footer/>
<script src="{{url('/assets')}}/js/meta.js"></script>