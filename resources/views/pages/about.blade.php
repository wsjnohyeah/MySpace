@extends('main')

@section('title')
	About - Ethanian
@endsection

@section('logo','Ethanian - About')

@section('content')
<div>
	<div class='place-holder hide-on-small-only'></div>

    <div class="row no-margin">
        <div class="col s12 m10 push-m1">
            <div class="card content-card">
                <div class="card-content">
                    <div class="row post-title">
                        <p class="grey-text">Last updated at 2017/3/13</p>
                    	<h5 class="col s12">About Me</h5>
                    </div>
                    <div align="left" class="about-intro">
                        <blockquote>
                            <li>High school <span class="blue-text">Senior</span></li><br>
                            <li>Programming Ethusiast <i class="material-icons green-text">code</i></li><br>
                            <li>Web Front&amp;Back-end, Java, a little iOS(Swift) <i class="material-icons orange-text">phone_iphone</i></li><br>
                            <li><span class="red-text">Canton, CHN</span><i class="material-icons grey-text">location_on</i></li><br>
                            <li>Contact: <a href="mailto:hi@ethanhu.me">hi@ethanhu.me</a> <i class="material-icons grey-text">contact_mail</i></li>
                        </blockquote>
                        <br>
                        <h5><i class="material-icons blue-text">build</i> Projects Working On</h5>
                        <blockquote>
                            <li>Creator: School Info Sharing Site "NoticeBoard 1 &amp; 2" : <a href="http://hfinotice.com">http://hfinotice.com</a></li>
                            <br>
                            <li>Particapating in "NoticeBoard 3" : <a href="https://hfi.me">https://hfi.me</a></li>
                            <br>
                            <li>iOS App: Texus Holdem Logger [a replacement for paper when playing this game among friends]</li>
                        </blockquote>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection