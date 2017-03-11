@extends('main')

@section('title')
	{{$post->title}} - Ethanian
@endsection

@section('logo','Ethanian - Post')

@section('content')
<div>
	<div class='place-holder hide-on-small-only'></div>

	@if($logged)
	<div class="row">
		<form action="/post/edit" method="post" accept-charset="utf-8">
    	{{ csrf_field() }}
    	<input type="hidden" name="id" value="{{$post->id}}">
        <div class="col s12 m10 push-m1">
        	<div class="card content-card">
            	 <div class="card-content">
                 	 <span class="card-title white-text">Edit Post</span>
                 	 <div class="row">
                     	 <div class="input-field col s12">
                         	 <input type="text" name="title" class="validate white-text" id="post-title" value="{{$post->title}}">
        						 <label class="active" >Title</label>
                         </div>
                         <div class="input-field col s12">
                            <textarea class="materialize-textarea white-text" name="content" id="post-content">{!!$post->content!!}</textarea>
                            <label>Content</label>                     
                        </div>	
                 </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light blue" type="submit" name="action">Edit
                     	 <i class="material-icons right">send</i>
                     </button>
                     <a class="btn waves-effect waves-light orange no-shadow" id="post_{{$post->id}}" onClick="delete_confirmation(this.id,'/post/delete/')"><i class="material-icons">delete</i></a>
                 </div>
            </div>
        </div>
        </form>
    </div>
    @endif

    <div class="row no-margin">
        <div class="col s12 m10 push-m1 no-padding">
            <div class="card content-card no-margin">
                <div class="card-content">
                    <div class="row post-title">
                    	<h5 class="col s12 white-text">{{$post->title}}</h5>
                    </div>
                    <div align="left" class="white-text">{!! processPost($post->content) !!}</div>
                    <br>
                   	<p align="right" class="green-text text-lighten-3">Last updated at {{date('Y/n/j G:i', strtotime($post->updated_at))}}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
        <script type="text/javascript" src="/js/scroll_loading.js"></script>
        <script>
        $(document).ready(function(e) {
            $(".post_image").scrollLoading();
        });
        </script>
@endsection