
@extends('main')

@section('title','Drive Access Verification')

@section('logo','Ethanian - Drive')

@section('content')
    <div class="container">
        
        <div class="row" id="message">
        	<div class="col s12 center">
                <h4 class="white-text">Private Drive, Enter Access Code:</h4>
            </div>
        </div>
        
        <form action="{{makeUrl('drive/verify')}}" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <div class="row">
            	<div class="col s12 m10 push-m1">
                	<div class="card content-card">
                    	 <div class="card-content">
                         	 <span class="card-title white-text">Enter the correct access code</span>
                         	 <div class="row">
                             	 <div class="input-field col s12">
                                 	 <input type="password" name="password" class="validate white-text">
     								 <label class="active" >Code</label>
                                 </div>
                             </div>	
                         </div>
                         <div class="card-action">
                             <button class="btn waves-effect waves-light blue no-shadow" type="submit" name="action">Submit
                             	 <i class="material-icons right">send</i>
                             </button>
                         </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
@endsection
