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
            <div class="col s12 m8 push-m2 cyan darken-2"></div>
        </div>
        <div class="row error-top-bar" style="margin-bottom:0">
            <div class="col s12 m8 push-m2 cyan">
            	<h3 class="white-text" align="center">Oops! Error!</h3>
            </div>
        </div>
        <div class="row">
        	<div class="col s12 m8 push-m2 grey lighten-3">
            	<div class="row"></div>
                <div class="row"></div>
                <div class="row">
                	<div class="col s10 push-s1">
						@if(empty($exception->getMessage()))
                            <h5 align="center">404: This Page doesn't exist</h5>
                        @else
                            <h5 align="center">{{$exception->getMessage()}}</h5>
                        @endif
					</div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        </div>
@endsection