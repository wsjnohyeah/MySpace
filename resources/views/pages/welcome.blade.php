@extends('main')

@section('title','Welcome - Ethanian')

@section('logo','Ethanian')

@section('content')
<div>
    
    <div class="place-holder hide-on-small-only"></div>
    @if($logged)
    <form action="/post/save" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="row">
        <div class="col s12 m10 push-m1">
        	<div class="card content-card">
            	 <div class="card-content">
                 	 <span class="card-title ">Post some thoughts?</span>
                 	 <div class="row">
                     	 <div class="input-field col s12">
                         	 <input type="text" name="title" class="validate " id="post-title">
        						 <label class="active" >Title</label>
                         </div>
                         <div class="input-field col s12">
                             <input type="text" name="image" class="validate " id="post-image">
                                 <label class="active" >Background Image</label>
                         </div>
                         <div class="input-field col s12">
                             <input type="text" name="intro" class="validate " id="post-intro">
                                 <label class="active" >Introduction</label>
                         </div>
                         <div class="input-field col s12">
                             <input type="text" name="author" class="validate " id="post-author">
                                 <label class="active" >Author</label>
                         </div>
                         <div class="input-field col s12">
                         	 <textarea class="materialize-textarea " name="content" id="post-content"></textarea>
                             <label>Content</label>
                         </div>
                     </div>	
                 </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
                     	 <i class="material-icons right">send</i>
                     </button>
                 </div>
            </div>
        </div>
    </div>
    </form>
    @endif

    @foreach($post as $post)
        <div class="row post-card">
          <div class="card medium col s12 m10 push-m1 l8 push-l2 no-padding">
                <div class="card-image">
                  <img class="post-image-title" src="/images/blank.png" data-url="{{$post->image}}">
                  <span class="card-title">{!! $post->title !!}</span>
                </div>
                <div class="card-content">
                  <p class="grey-text darken-1">{{date('Y/n/j', strtotime($post->created_at))}}</p>
                  <p>{{$post->intro}}</p>

                </div>
                <div class="card-action">
                  By <span class="blue-text">{{$post->author}}</span>
                  <a href="/post/{{$post->id}}" class="right blue-text">Read more...</a>
                </div>
          </div>
        </div>


        {{--
        <div class="row">
            <div class="col s12 m10 push-m1">
                <div class="card content-card pointer no-margin" onclick="location.href='/post/{{$row->id}}'">
                    <div class="card-content">
                        <div class="row content-title">
                        	<div class="col s12 flow-text ">{{$row->title}}</div>
                        </div>
                        <div class="row no-margin">
                            <p class="col s12 green-text text-lighten-3">Created at {{date('Y/n/j G:i', strtotime($row->created_at))}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    @endforeach

</div>
@endsection

@section('scripts')
        <script type="text/javascript" src="/js/scroll_loading.js"></script>
        <script>
        $(document).ready(function(e) {
            $(".post-image-title").scrollLoading();
        });
        </script>
@endsection