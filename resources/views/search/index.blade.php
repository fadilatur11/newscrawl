<x-header/>
<div class="view view-main view-init ios-edges" data-url="/">
   <!-- navbar -->
   <div class="page page-home">
      <div class="page-content">
         <!-- navbar top -->
         <div class="navbar-top">
            <div class="container">
               <div class="row">
                  <div class="col-50">
                     <div class="content-left">
                     <a href="{{url('/')}}" class="external"><h3>News</h3></a>
                     </div>
                  </div>
                  <div class="col-50">
                     <x-search/>
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
                        <a class="external" href="{{ url('/detail/'.$data->id.'/'.$data->slug) }}">
                        <img alt="" class="lazy-fade-in lazy-loaded" src="{{$tim.$data->image}}&w=500&h=325&zc=1">
                        </a>
                     </div>
                  </div>
                  <div class="col-50">
                     <div class="content-text">
                        <span>{{$data->author}}</span>
                        <a class="external" href="{{ url('/detail/'.$data->id.'/'.$data->slug) }}">
                           <h5>{{$data->title}}</h5>
                        </a>
                        <p class="date">20 minute ago</p>
                     </div>
                  </div>
               </div>
            @endforeach  
               <div id="setmore"></div>
               <br>
               <div class="link-more">
                <input type="hidden" id="keywords" value="{{$keywords}}">
                <input type="hidden" id="baseurl" value="{{url('/')}}">
                  <button type="button" class="button button-custom loadmore">View More</button>
                  <!-- offset -->
                  <input type="hidden" id="more" value="11"> 
                  <!-- end offset -->
               </div>
            </div>
            
         </div>
      </div>
      <!-- end post -->
   </div>
</div>
<x-footer/>
<script src="{{url('/assets')}}/js/search.js"></script>