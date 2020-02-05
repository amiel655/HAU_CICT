@extends('layouts.app') 
@section('title', '| CODEGEEKS ADMIN') 
@section('main-stylesheets')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >    
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>     
@stop @section('content') 
@include('inc.admin-navbar')
<div id="loginForm">
    <div class="container add-codegeeks-post-box">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <span class="white">HAU-</span><span class="orange">CICT</span> | <span class="white"><img src="/assets/imgs/logo/codegeeks_logo.jpg" class="img-fluid rounded-circle" height="50px" width="50px"> EDIT POST</span>
                </h1>
            </div>
            <div class="col-md-6"><br><br>
                {!! Form::open(['action' => ['CodeGeeksController@update', $codegeeks->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <h4>{{Form::label('title', 'TITLE',  ['class' => 'white']   )}}</h4>
                    {{Form::text('title', $codegeeks->title, ['class' => 'form-control codegeeks-input codegeeks-focus', 'placeholder' => 'Title'])}}
                </div>
            </div>
            <div class="col-md-6"><br><br>
                <div class="form-group">
                    <h4>{{Form::label('title', 'EDIT IMAGE', ['class' => 'white'])}}</h4>
                    <img src="/storage/cover_images/{{$codegeeks->cover_image}}" class="img-fluid inputedImage" id="previewForm137" width="300px" /><br><br>
                    <label class="custom-file-upload-codegeeks">
                        {{Form::file('cover_image', ['id' => 'input-image'])}}
                        <h6 class="white">UPLOAD IMAGE</h6>
					</label>
                </div>

  
            </div>
            <div class="col-md-12">
                <br>
                <div class="form-group">
                        {{Form::label('body', 'BODY', ['class' => 'white'])}}
                        {{Form::textarea('body', $codegeeks->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <div class="text-right">
                      {{Form::hidden('_method','PUT')}}
    {{Form::submit('UPDATE POST', ['class' => ' btn-codegeeks'])}}
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