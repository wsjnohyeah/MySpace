
@extends('main')

@section('title','Drive Access Verification')

@section('logo','Ethanian - Drive')

@section('content')
        <div class="place-holder"></div>
        <form action="/drive/verify" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <div class="row">
            	<div class="col s12 m10 push-m1">
                	<div class="card content-card">
                    	 <div class="card-content">
                         	 <span class="card-title">This is a private drive I set up for myself. Please enter access code.</span>
                         	 <div class="row">
                             	 <div class="input-field col s12">
                                 	 <input type="password" name="password" class="validate">
     								 <label class="active" >Access Code</label>
                                 </div>
                             </div>	
                         </div>
                         <div class="card-action">
                             <button class="btn waves-effect waves-light cyan no-shadow" type="submit" name="action">Submit
                             	 <i class="material-icons right">send</i>
                             </button>
                         </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
@endsection
