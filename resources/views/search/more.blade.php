@foreach($data as $value)
<div class='row'>
    <div class='col-50'>
        <div class='content'>
            <a class='external'  href="javascript:void(0)" onclick="showOptionRead('{{ url('/detail/'.$value['id'].'/'.$value['slug']) }}')">
                <img src="{{ $value['image'] }}" alt="{{ $value['title'] }}">
            </a>
        </div>
        </div>
            <div class='col-50'>
                <div class='content-text'>
                    <span>{{ $value['author'] }}</span>
                        <a class='external'  href="javascript:void(0)" onclick="showOptionRead('{{ url('/detail/'.$value['id'].'/'.$value['slug']) }}')"><h5>{{ $value['title'] }}</h5></a>
                    <p class='date'>{{Carbon\Carbon::parse(date('Y-m-d',$value['published_at']))->diffForHumans()}}</p>
                </div>
            </div>
        </div>
@endforeach