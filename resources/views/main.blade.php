<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	<!--Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="telephone=no" name="format-detection"/>
    <link rel="apple-touch-icon-precomposed" href="/favicon.ico">
	<link rel="icon" href="/favicon.ico type="image/x-icon">
    <div id="wx_pic" style="margin:0 auto;display:none;">
		<img src="/wecon.jpg" />
	</div>
    
    <!--Stylesheets-->
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/index.css"  media="screen,projection"/>
    @yield("stylesheets")

</head>

<body>
	<nav class="cyan" id="nav-bar">
    	<div class="nav-wrapper container">
        	<a href="#" class="brand-logo white-text">@yield('logo')</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons white-text">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/" class="white-text">About</a></li>
            </ul>
        </div>
	</nav>

    <ul id="nav-mobile" class="side-nav cyan darken-1">
        <li><a href="/posts" class="white-text">Posts</a></li>
        <li><a href="/" class="white-text">About</a></li>
    </ul>
    
    <main>
        @yield("content") 
    </main>
    
    <div class="place-holder hide-on-small-only"></div>
    
    <footer class="page-footer cyan no-margin" id="footer">
    	<div class="container">
        	<div class="col l6 s12">
            	<h5 class="white-text">Hello~</h5>
            	<p class="white-text">I'm Ethan. I love technology; I love programming. </p>
        	</div>
        </div>
        
        <div class="footer-copyright cyan darken-1" id="copyright">
        	<div class="container white-text">
            	© 2018 Ethan Hu "hqc"
            </div>
        </div>
    </footer>
</body>

<!--Scripts-->
    <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    @yield("scripts")

</html>
