@extends('main')

@section('title','Welcome')

@section('logo','Ethanian - Space')

@section('content')
<div>

    <div class="row" id="message">
        <div class="col s12 center">
            <h4 class="white-text">Welcome to my Blog 😉</h4>
        </div>
    </div>
    
    @if($logged)
    <form action="/post/save" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="row post-card">
        <div class="col s12 m10 push-m1">
        	<div class="card content-card">
            	 <div class="card-content">
                 	 <span class="card-title white-text">Post some thoughts?</span>
                 	 <div class="row">
                     	 <div class="input-field col s12">
                         	 <input type="text" name="title" class="validate white-text" id="post-title">
        						 <label class="active" >Title</label>
                         </div>
                         <div class="input-field col s12">
                         	 <textarea class="materialize-textarea white-text" name="content" id="post-content"></textarea>
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

    @foreach($post as $row)
        <div class="row">
            <div class="col s12 m10 push-m1">
                <div class="card content-card pointer" onclick="location.href='/post/{{$row->id}}'">
                    <div class="card-content">
                        <div class="row">
                        	<div class="col s7 m8 l10 flow-text white-text">{{$row->title}}</div>
                            <div class="col s5 m4 l2"><p class="right green-text text-lighten-3">{{date('Y/n/j G:i', strtotime($row->created_at))}}</p></div>
                        </div>
                        <p align="left" class="blue-text text-lighten-3">[Click on the card to view the full article]</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection