<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	<!--Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="telephone=no" name="format-detection"/>
    <link rel="apple-touch-icon-precomposed" href="{{makeUrl('')}}favicon.ico">
	<link rel="icon" href="{{makeUrl('')}}favicon.ico type="image/x-icon">
    <div id="wx_pic" style="margin:0 auto;display:none;">
		<img src="{{makeUrl('')}}wecon.jpg" />
	</div>
    
    <!--Stylesheets-->
    <link type="text/css" rel="stylesheet" href="{{makeUrl('')}}css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{makeUrl('')}}css/index.css"  media="screen,projection"/>
    @yield("stylesheets")

</head>

<body>
	<nav class="black" id="nav-bar">
    	<div class="nav-wrapper container">
        	<a href="#" class="brand-logo white-text">@yield('logo')</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
             	<li><a href="{{makeUrl('')}}" class="white-text">Home</a></li>
            	<li><a href="{{makeUrl('drive')}}" class="white-text">Drive</a></li>
            </ul>
        </div>
	</nav>

    <ul id="nav-mobile" class="side-nav grey darken-4">
        <li><a href="{{makeUrl('')}}" class="white-text">Home</a></li>
        <li><a href="{{makeUrl('drive')}}" class="white-text">Drive</a></li>
    </ul>
    
    <main>
        @yield("content") 
    </main>
    
    
    
    <footer class="page-footer grey darken-4" id="footer">
    	<div class="container">
        	<div class="col l6 s12">
            	<h5 class="grey-text text-lighten-2">Hello~</h5>
            	<p class="grey-text text-lighten-2">I'm Ethan. I love technology; I love programming. </p>
        	</div>
        </div>
        
        <div class="footer-copyright black" id="copyright">
        	<div class="container grey-text text-lighten-2">
            	© 2017 Ethan Hu "hqc"
            </div>
        </div>
    </footer>
</body>

<!--Scripts-->
    <script type="text/javascript" src="{{makeUrl('')}}js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{makeUrl('')}}js/materialize.min.js"></script>
    <script type="text/javascript" src="{{makeUrl('')}}js/main.js"></script>
    @yield("scripts")

</html>