@extends('layouts.app')
 @section('title', '| IGOARA') 
 @section('orgs-stylesheets')
 <link rel="stylesheet" href="css/orgs.css" type="text/css">
 @stop
 @section('content')
<div id="igoaraHeader">
        <span><img src="assets/imgs/logo/igoara_logo.jpg" alt="Igoara's Logo" class="img-fluid rounded-circle"></span>
        <h1 class="txt"><br/>INTEREST GROUP OF ALLIED RANDOM ARTISTS</h1>
        <h2 class="ptxt">&bull; ANIMATION &bull;</h2>
    </div>

    <div id="main">

        <header class="major container 75%">
            <h2 class="txt">Sample text here
                <br />Sample text here
                <br /></h2>
        </header>

        <div class="container-fluid">
			<div class="row">
				<div class="col-md-5">
					<img src="assets/imgs/orgs/igoara.png" alt="Igoara Members" class="img-fluid">
				</div>
				<div class="col-md-7">
					
					<h1 class="txt">
						INTEREST GROUP OF ALLIED RANDOM ARTISTS
					</h1>
	
					<div>
						<hr class="hrO">
						<br><br><br>
						<p class="ptxt">
                            "IGOARA is an organization that promotes the interest of the creatives and at the same time, a venue for our creative students to share their skills or voice-out their concepts and concerns with regards to the best interest
							of the animation students" - Mr. Sig Yu
						</p>
					</div>
				</div>
			</div>
		</div>
<section class="major container 75%">
            <h3>MEMBERS KENI</h3>
            @if(count($users)>0)
            @foreach($users as $users1)
            @if($users1->role == 'CodeGeeks')
                <div class="card card-body bg-light">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                        <img class="img-responsive" style="width:100%" src="/storage/cover_images/{{$users1->cover_image}}" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                <h3><a href="/codegeeks/{{$users1->id}}">{{$users1->title}}</a></h3>
                        <small>Written on {{$users1->created_at}} ORGANIZATION:{{$users1->role}}</small>
                        </div>
                    </div>
            
                </div><br>
            @endif
                @endforeach
            @else
            <p>No posts found</p>
            @endif
            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
            <ul class="actions">
                <li><a href="#" class="button">Join our crew</a></li>
            </ul>
        </section>
<section class="major container 75%">
            <h3>POSTS KEHI</h3>
            @if(count($codegeeks)>0)
@foreach($codegeeks as $codegeeks1)
@if($codegeeks1->role == 'CodeGeeks')
    <div class="card card-body bg-light">
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img class="img-responsive" style="width:100%" src="/storage/cover_images/{{$codegeeks1->cover_image}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
    <h3><a href="/codegeeks/{{$codegeeks1->id}}">{{$codegeeks1->title}}</a></h3>
            <small>Written on {{$codegeeks1->created_at}} by {{$codegeeks1->user->name}} ORGANIZATION:{{$codegeeks1->role}}</small>
            </div>
        </div>

    </div><br>
@endif
    @endforeach
    {{$igoara->links()}}
@else
<p>No posts found</p>
@endif
            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
            <ul class="actions">
                <li><a href="#" class="button">Join our crew</a></li>
            </ul>
        </section>

    </div>

    <!-- Footer -->
    <div id="igoaraFooter">
        <div class="container 75%">

            <header class="major last">
                <h2>Lorem Ipsum</h2>
            </header>

            <p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>

            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            </ul>

            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">Projman</a></li>
            </ul>

        </div>
    </div>

    @yield('p')
    @stop