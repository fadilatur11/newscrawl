@foreach($articles as $article)
<div class="row">
    <div class="col-50">
        <div class="content">
            <a class="external" href="javascript:void(0)" data-instant="{{ url('/detail/'.$article['id'].'/'.$article['slug']) }}" data-source="{{ $article['link'] }}">
                <img src="{{$article['image']}}" alt="{{$article['title']}}" onerror="this.onerror=null; this.src='{{ asset("/images/404.jpg") }}'">
            </a>
        </div>
    </div>
    <div class="col-50">
        <div class="content-text">
            <span>{{$article['author']}}</span>
            <a class="external" href="javascript:void(0)" data-instant="{{ url('/detail/'.$article['id'].'/'.$article['slug']) }}" data-source="{{ $article['link'] }}">
                <h5>{{$article['title']}}</h5>
            </a>
            <p class="date">{{Carbon\Carbon::parse(date('Y-m-d',$article['published_at']))->diffForHumans()}}</p>
        </div>
    </div>
</div>
@endforeach
