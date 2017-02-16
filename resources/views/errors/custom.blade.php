@extends('main')

@section('title','error')

@section('logo','Error')

@section('stylesheets')
    <style>
        body{
            background:none;
        }
    </style>
@endsection



@section('content')
<div class="container">
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
        <div class="row error-status-bar">
            <div class="col s12 m8 push-m2 light-blue darken-2"></div>
        </div>
        <div class="row error-top-bar" style="margin-bottom:0">
            <div class="col s12 m8 push-m2 light-blue">
            	<h3 class="white-text" align="center">Oops! A Problem!</h3>
            </div>
        </div>
        <div class="row">
        	<div class="col s12 m8 push-m2 grey lighten-3">
            	<div class="row"></div>
                <div class="row"></div>
                <div class="row">
                	<div class="col s10 push-s1">
						<h5>{{$error}}</h5>
					</div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        </div>
@endsection