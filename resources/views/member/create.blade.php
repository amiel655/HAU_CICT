@extends('layouts.app') 
@section('title', '| ADD MEMBER') 
@section('main-stylesheets')
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >    
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>     
@stop @section('content') 
@include('inc.admin-navbar')
<div id="loginForm">
    <div class="container add-member-box">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <span class="white">HAU-</span><span class="orange">CICT</span> | <span class="orange">ADD MEMBER</span>
                </h1>
            </div>
            <div class="col-md-12"><br><br>
                {!! Form::open(['action' => 'MemberController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <h4>{{Form::label('title', 'FACULTY IMAGE', ['class' => 'orange'])}}</h4>
                    <img src="" class="img-fluid inputedImage" id="previewForm137" width="300px" /><br><br>
                    <label class="custom-file-upload">
                        {{Form::file('cover_image', ['id' => 'input-image'])}}
                        <h6 class="white">UPLOAD IMAGE</h6>
					</label>
                </div>
                <div class="form-group">
                    <h4>{{Form::label('title', 'NAME', ['class' => 'orange'])}}</h4>
                    {{Form::text('title', '', ['class' => 'form-control register-input', 'placeholder' => 'Enter Faculty Name'])}}
                </div>
                <div class="form-group">
                    <h4>{{Form::label('body', 'CONSULTATION HOURS', ['class' => 'orange'])}}</h4>
                    {{Form::text('body', '', ['class' => 'form-control register-input', 'placeholder' => 'Enter Faculty Consultaion Hours'])}}
                </div><br><br>
                <div class="text-right">
                    {{Form::submit('ADD MEMBER', ['class' => 'btn-login'])}}
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