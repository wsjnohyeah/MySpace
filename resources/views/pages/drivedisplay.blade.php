@extends('main')

@section('title','Drive')

@section('logo','Ethanian - Drive')

@section('stylesheets')
	<style>
		body{
			background:none;
		}
	</style>
@endsection


@section('content')
        <div class="container">
        	
            <div class="row" id="placeholder"></div>
            
            <div class="row">
            	<div class="col s12 m10 push-m1">
            		<div class="card grey lighten-3 content-card">
                    	<div class="card-content">
                         	 <p>You have been verified. Click to Sign out for security.</p>
                        </div>
                        <div class="card-action">
                             <button class="btn waves-effect waves-light red lighten-2 no-shadow" type="submit" name="action" onClick="location.href='/drive/signout'">Sign Out</button>
                             <button class="btn waves-effect waves-light grey darken-2 no-shadow" type="submit" name="action" onClick="location.href='/post_images'">Access Post Image Drive</button>
                        </div>
                	</div>
                </div>
            </div>
                
            <form action="do_upload" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <div class="row">
            	<div class="col s12 m10 push-m1">
                	<div class="card grey lighten-3 content-card">
                    	 <div class="card-content">
                             <span class="card-title">Upload a file to the drive</span>
                         	 <div class="file-field input-field">
                                  <div class="btn no-shadow">
                                  		<span>File</span>
                                  		<input type="file" name="userfile">
                                  </div>
                                  <div class="file-path-wrapper">
                                    	<input class="file-path validate" type="text" name="name">
                                  </div>
                             </div>
                             <div class="red-text" id="error">{{$error}}</div>
                         </div>
                         <div class="card-action">
                             <button class="btn waves-effect waves-light blue no-shadow" type="submit" name="action">Upload
                             	 <i class="material-icons right">send</i>
                             </button>
                         </div>
                    </div>
                </div>
            </div>
            </form>
                
            <table class="centered striped">
            	<thead>
                	<tr>
                    	<th data-field="Name">File Name</th>
                        <th data-field="Name">Size</th>
                        <th data-field="Name">Time</th>
                        <th data-field="Name">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($data as $row)
                	<tr>
                    	<td>{{$row->name}}</td>
                        <td>{{$row->size}}</td>
                        <td>{{date('Y/n/j G:i', strtotime($row->created_at))}}</td>
                        <td>
                        	<a href="/{{$row->link}}" class="btn waves-effect waves-light blue no-shadow"><i class="material-icons">system_update_alt</i></a>
                          <button class="btn waves-effect waves-light orange no-shadow" id="file_{{$row->id}}" onClick="delete_confirmation(this.id,'/drive/delete/')"><i class="material-icons">delete</i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
@endsection