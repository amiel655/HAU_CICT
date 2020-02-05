@extends('layouts.app') 
@section('title', '| FACULTY ADMIN') 
@section('main-stylesheets')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >    
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>     
@stop @section('content') 
@include('inc.admin-navbar')
<div id="loginForm">
    <div class="container login-box">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <span class="white">HAU-</span><span class="orange">CICT</span> | <span class="orange">NEW ARTICLE</span>
                </h1>
            </div>
            <div class="col-md-6"><br><br>
                {!! Form::open(['action' => ['ArticleController@update', $article->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <h4>{{Form::label('title', 'TITLE', ['class' => 'white'])}}</h4>
                    {{Form::text('title', $article->title, ['class' => 'form-control login-input login-focus', 'placeholder' => 'Enter Post Title'])}}
                </div>
            </div>
            <div class="col-md-6"><br><br>
                <div class="form-group">
                    <h4>{{Form::label('title', 'POST IMAGE', ['class' => 'white'])}}</h4>
                    <img src="/storage/cover_images/{{$article->cover_image}}" class="img-fluid inputedImage" id="previewForm137" width="300px" /><br><br>
                    <label class="custom-file-upload">
                        {{Form::file('cover_image', ['id' => 'input-image'])}}
                        <h6 class="white">UPLOAD IMAGE</h6>
					</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <h4>{{Form::label('body', 'BODY', ['class' => 'white'])}}</h4>
        {{Form::textarea('body', $article->title, ['id' => 'article-ckeditor', 'placeholder' => 'Body Text'])}}
                </div><br>
                <div class="text-right">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('SUBMIT ARTICLE', ['class' => 'btn-login'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<script>
			//Preview of Image
			$(function () {
				$("#input-image").change(function () {
					readImgUrlAndPreview(this);

					function readImgUrlAndPreview(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							reader.onload = function (e) {
								$("#previewForm137").attr("src", e.target.result);
								console.log(e.target.result);
							};
						}
						reader.readAsDataURL(input.files[0]);
					}
				});
			});
        </script>
@endsection