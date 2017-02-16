@extends('main')

@section('title')
	{{$post->title}} - Ethanian
@endsection

@section('logo','Ethanian - Post')

@section('content')
<div>
	<div class='place-holder'></div>

	@if($logged)
	<div class="row post-card">
		<form action="{{makeUrl('post/edit')}}" method="post" accept-charset="utf-8">
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
                         	 <textarea name="content" id="post-content">{{$post->content}}</textarea>                         </div>
                     </div>	
                 </div>
                 <div class="card-action">
                     <button class="btn waves-effect waves-light blue" type="submit" name="action">Edit
                     	 <i class="material-icons right">send</i>
                     </button>
                     <a class="btn waves-effect waves-light orange no-shadow" id="post_{{$post->id}}" onClick="delete_confirmation(this.id,'{{makeUrl('post/delete/')}}')"><i class="material-icons">delete</i></a>
                 </div>
            </div>
        </div>
        </form>
    </div>
    @endif

    <div class="row">
        <div class="col s12 m10 push-m1">
            <div class="card content-card">
                <div class="card-content">
                    <div class="row">
                    	<div class="col s12 flow-text white-text">{{$post->title}}</div>
                    </div>
                    <p align="justify" class="white-text">{!! $post->content !!}</p>
                    <br>
                   	<p align="right" class="green-text text-lighten-3">Last updated at {{date('Y/n/j G:i', strtotime($post->updated_at))}}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    @if($logged)
        <script type="text/javascript" src="{{makeUrl('')}}tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({ 
                selector: 'textarea',
                height: 300,
                menubar: false,
                plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code textcolor'
                ],
                toolbar: 'undo redo | insert | styleselect | bold underline italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | forecolor backcolor',
                content_css: '//www.tinymce.com/css/codepen.min.css',
                image_dimensions: false,
            });
        </script>
    @endif
@endsection