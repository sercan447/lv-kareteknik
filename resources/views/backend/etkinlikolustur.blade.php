@extends("backend.sablon/varsayilan")

@section("cssler")
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-summernote/summernote-bs3.css')}}">
<link href="{{ asset('css/sweetalert2.min.css')}}" />
@endsection

@section("javascriptsler")
<script src="{{asset('backend/assets/plugins/bootstrap-summernote/summernote.min.js') }}"></script>
<script	src="{{ asset('js/jquery.form.min.js') }}" ></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
<script src="{{ asset('js/messages_tr.js') }}" ></script>
<script src="{{ asset('js/sweetalert2.all.min.js')}}" ></script>

<script>
$(document).ready(function(){

$('#summernote').summernote({
    height: 300
});

}); //document.ready
</script>

@endsection

@section("sayfaismi")
{{$sayfa}}
@endsection

@section("icerik")

<h1>Etkinlik Oluştur</h1>


<!-- BEGIN GRID NO-BORDER BOTH BLACK -->
<div class="col-md-12">
						<div class="grid no-border top bottom black">
							<div class="grid-header">
								<i class="fa fa-laptop"></i>
								<span class="grid-title">Yeni Etkinlik Ekle</span>
							</div>
							<div class="grid-body">


								<img src="{{asset('yuklenen/img/logos.png')}}"  height="200" width="222" />

									{{ Form::open(array("url"=>"yonetici/admetkinlikolustur","enctype"=>"multipart/form-data")) }}
								<div class="row">


									{{Form::file("etkinlikresmi") }}

									<div class="col-md-10 col-sm-10 col-xs-12">
											{{ Form::label("etkinlikadi","Etkinlik Adı") }}
											{{ Form::text("etkinlikadi",null,array("class"=>"form-control","placeholder"=>"Etkinlik ismi giriniz")) }}
									</div>
	
									<div class="col-md-10 col-sm-10 col-xs-12 col-lg-12">
											{{ Form::label("etkinlikaciklama","Etkinlik Açıklaması") }}
												<textarea id="summernote" name="kategoriaciklama"></textarea>
											<!--{{ Form::textarea("urunaciklama",null,array("class"=>"form-control")) }} -->
									</div>

									{{ Form::submit("Etkinlik Kayıt",array("class"=>"form-control btn btn-primary")) }}

								</div>
								{{ Form::close() }}

							</div>
						</div>
					</div>
					<!-- END GRID NO-BORDER BOTH BLACK -->





@endsection
