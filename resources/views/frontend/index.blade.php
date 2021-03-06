<!DOCTYPE html>
<html class="no-js">

<!-- Mirrored from www.picseel.com/themes/crafto/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2017 14:57:51 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >

	<title>	Kardeşler Dekorasyon ve Tesisat	</title>

	<link   rel="icon" type="image/x-icon" href="favicon.html"  />
	<link rel="stylesheet"  href="{{asset('frontend/css/bootstrap.css') }}" />
	<link  rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet"   href="{{asset('frontend/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body data-spy="scroll" data-target="#my-nav">

<!-- Navigation Bar -->
<div class="navbar navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img class="logo" src=" {{ asset('frontend/assets/logon.png') }}" alt=""></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<nav id="my-nav" class="navbar-collapse collapse" role="navigation">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#welcome">Ev</a></li>
				<li><a href="#portfolio">Çalışmalar</a></li>
				<li><a href="#team">Kimiz</a></li>
				<li><a href="#services">Neler Yapıyoruz</a></li>
				<li><a href="#blog">Haberler</a></li>
				<li><a href="#contact">İrtibata Geç</a></li>
			</ul>
		</nav><!--/.navbar-collapse -->

	</div>
</div>
<!-- End of Navigation Bar -->


<!-- Welcome Section -->
<section id="welcome" class="parallax welcome-section photo-section dark-section light-content parallax">
	<section style="  background-image:url('frontend/assets/welcome-img.jpg');"> </section>
	<div class="bg-overlay"></div>
	<div class="container">
		<div class="content-wrapper">
			<div class="welcome-content">
				<h1 class="special-heading light-special">Kardeşler Dekorasyon</h1>
				<p>
					<span>Her Türlü Tesisat - Alçıpan -Kalorifer Temizliği</span>
					<span class="rotating-words">VE,Hertürlü,İşler</span>
				</p>
				@php
					$sosyalmedya = \App\SosyalmedyaModel::get();
						@endphp
				<div class="social-icons light-icons">
					@foreach($sosyalmedya as $sos)
							@if(!empty( trim($sos->facebook) ) )
							 <a href="{{$sos->facebook}}"><i class="fa fa-facebook"></i></a>
							 @endif
							 @if(!empty( trim($sos->twitter) ) )
							 <a href="{{$sos->twitter}}"><i class="fa fa-twitter"></i></a>
							 @endif
							 @if(!empty( trim($sos->instagram) ) )
							 <a href="{{ $sos->instagram }}"><i class="fa fa-instagram"></i></a>
							 @endif
							 @if(!empty( trim( $sos->pinterest) ) )
							 <a href="{{ $sos->pinterest }}"><i class="fa fa-pinterest"></i></a>
							 @endif
							 @if(!empty( trim($sos->youtube) ) )
							 <a href="{{ $sos->youtube }}"><i class="fa fa-youtube"></i></a>
							 @endif
							 @if(!empty(trim($sos->linkedin) ) )
							 <a href="{{ $sos->linkedin }}"><i class="fa fa-linkedin  "></i></a>
							 @endif
							 @if(!empty( trim($sos->tumblr) ) )
							 <a href="{{ $sos->tumblr }}"><i class="fa fa-tumblr"></i></a>
							 @endif
							 @if(!empty( trim($sos->vimeo) ) )
							 <a href="{{ $sos->vimeo }}"><i class="fa fa-vimeo-square"></i></a>
							 @endif
							 @if(!empty( trim($sos->flickr) ) )
							 <a href="{{ $sos->flickr }}"><i class="fa fa-flickr"></i></a>
							 @endif
							 @if(!empty( trim($sos->vk) ) )
							 <a href="{{ $sos->vk }}"><i class="fa fa-vk"></i></a>
							 @endif
							 @if(!empty( trim($sos->googleplus) ) )
							 <a href="{{ $sos->googleplus }}"><i class="fa fa-google-plus"></i></a>
							 @endif

					@endforeach
				</div>
				<div class="scroll-more">
					<span>Aşağa</span>
					<i class="scroll-arrow"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Welcome Section -->


<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section light-section dark-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="special-heading dark-special">Çalışmalarımız</h1>
				<p class="section-description">Yaptığımız işleri bir kaçını aşağıda görebilirsiniz. </p>
			</div>
		</div>

		<div class="filter-bar clearfix">
			<ul class="filter-list">
				<li class="filter btn btn-medium btn-darkblue btn-outline active" data-id="all">Hepsi</li>
				<li class="filter btn btn-medium btn-darkblue btn-outline" data-id="tesisat">Sıhhi Tesisat</li>
				<li class="filter btn btn-medium btn-darkblue btn-outline" data-id="dekorasyon">Dekorasyon</li>
				<li class="filter btn btn-medium btn-darkblue btn-outline" data-id="kalorifer">Kalorifer</li>
				<li class="filter btn btn-medium btn-darkblue btn-outline" data-id="add-ons">Add-Ons</li>
			</ul>

			<a href="#" class="more-work btn btn-medium btn-darkblue btn-outline">Anasayfa</a>
		</div>


		<div class="main">
			<ul id="og-grid" class="og-grid">
				<li class="portfolio-item visible-item" data-id="add-ons kalorifer">
					<a href="http://crtv.mk/sXBR" data-largesrc="{{ asset('frontend/assets/work1-big.jpg') }}" data-category="Add-Ons Graphics" data-date="Apr 10th, 2014" data-title="Azuki bean" data-description="This is a pack of 10 Vintage text styles. You can use all these styles in web design or web apps but I've made them in 2 different sizes, so you can use those vintage text styles even on print materials. With this Vintage Text Styles pack you can design a logo, a title or any text in web or print materials.">
						<img src="{{ asset('frontend/assets/work1-big.jpg') }}" alt="Breath - Vintage Text Styles"/>
						<div class="overlay-content">
							<h4>Breath - Vintage Text Styles</h4>
							<p>This is a pack of 10 Vintage text styles. You can use all these styles in web design or web apps but I've made them in 2 different sizes, so you can use those...</p>
						</div>
					</a>
				</li><li class="portfolio-item visible-item" data-id="kalorifer">
					<a href="http://crtv.mk/dXTs" data-largesrc="{{ asset('frontend/assets/work2-big.jpg') }}" data-category="Graphics" data-date="Apr 10th, 2014" data-title="Business Card Mockups - pack 2" data-description="<p>Now you can show your mousemade artwork to your clients with style. This is my second pack of Mockup Templates for your Business Cards or Business Card Templates. You can use this mockups pack to present your designs in a better artistic way. Also you can use these business cards mockups for your logo previews to show how the logo looks on a printed card.</p><p>The Mockups pack includes 4 Templates with very realistic perspective and photo effects.Features on this</p><h4>Features:</h4><ul><li>includes 4 PSD files very well organized</li><li>realistic photo effects</li><li>realistic perspective and depth of field</li><li>designs made with smart objects</li></ul>">
						<img src="{{ asset('frontend/assets/work2-big.jpg') }}" alt="Business Card Mockups - pack 2"/>
						<div class="overlay-content">
							<h4>Business Card Mockups - pack 2</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
						</div>
					</a>
				</li><li class="portfolio-item visible-item" data-id="tesisat">
					<a href="http://crtv.mk/iYaf" data-largesrc="{{ asset('frontend/assets/work3-big.jpg') }}" data-category="UI Design" data-date="Apr 10th, 2014" data-title="Whitepixels UI v1.1" data-description="This is a great pack of premade graphics and web elements designed to help you create applications, great online services or websites. All elements are vector shapes so you can resize them without quality loss. The pack includes: buttons, knobs, forms, sliders, menu bar, switches, directional buttons, list selector, equalizer interface, timeline and a lot more. Every single element was designed with all my atention on details. I hope you'll like and recommend it.">
						<img src="{{ asset('frontend/assets/work3-big.jpg') }}" alt="Whitepixels UI v1.1"/>
						<div class="overlay-content">
							<h4>Whitepixels UI v1.1</h4>
							<p>This is a great pack of premade graphics and web elements designed to help you create applications, great online services or websites. All elements are vector...</p>
						</div>
					</a>
				</li><li class="portfolio-item visible-item" data-id="kalorifer">
					<a href="http://crtv.mk/qXNg" data-largesrc="{{ asset('frontend/assets/work4-big.jpg') }}" data-category="Graphics" data-date="Apr 10th, 2014" data-title="Hardcover Book Mockups - mega pack" data-description="<p>If you are a writer, web designer or graphic designer and you need to showcase a book in minutes, this is the product you need. With just few clicks, your Hardcover book is prepared to be shown to the world with style. You only need to paste your title and graphics and your book is ready.</p><p>This Book Mockups pack contains 15 well-made and well-organized PSD files with transparent background. So you can easily save your book as png file and insert it on your design. Every file includes the wood background but you can still add your own. The Hardcover Book Mockups are made in hi-res so you can use them even on print materials.</p>">
						<img src="{{ asset('frontend/assets/work4-big.jpg') }}" alt="Hardcover Book Mockups - mega pack"/>
						<div class="overlay-content">
							<h4>Hardcover Book Mockups - mega pack</h4>
							<p>If you are a writer, web designer or graphic designer and you need to showcase a book in minutes, this is the product you need. With just few clicks...</p>
						</div>
					</a>
				</li><li class="portfolio-item visible-item" data-id="tesisat">
					<a href="http://crtv.mk/hYir" data-largesrc="{{ asset('frontend/assets/work5-big.jpg') }}" data-category="UI Design" data-date="Apr 10th, 2014" data-title="CreamUI - mobile interface kit" data-description="<p>This is a great mobile UI pack designed to help you create applications for iPhone and iPad with Retina screen. You can modify all graphics and styles just as you want, and use any of included elements: buttons, knobs, sliders, image thumbnails, progress bars, shelfs, forms, checkboxes, call-to-action buttons, audio and video player, switches and a lot more...</p><p>Every single button of this mobile UI pack is designed in 2 versions: normal and pressed. Also all graphics are vector. It means that you can resize every single element without losing quality.</p>">
						<img src="{{ asset('frontend/assets/work5-big.jpg') }}" alt="CreamUI - mobile interface kit"/>
						<div class="overlay-content">
							<h4>CreamUI - mobile interface kit</h4>
							<p>This is a great mobile UI pack designed to help you create applications for iPhone and iPad with Retina screen. You can modify all graphics and styles just...</p>
						</div>
					</a>
				</li><li class="portfolio-item visible-item" data-id="dekorasyon">
					<a href="http://crtv.mk/fY4f" data-largesrc="{{ asset('frontend/assets/work6-big.jpg') }}" data-category="Web Design" data-date="Apr 10th, 2014" data-title="PlanusWP - One Page Wordpress Theme" data-description="<p>PlanusWP is a responsive one-page Wordpress theme built on Twitter Bootstrap 3 framework. PlanusWP theme is ment to present you as a designer or creative professional to the world. Moreover, this theme can be adapted to any kind of creative agency. This theme was built using the latest features from Bootstrap 3 so it's responsive (mobile first), flat and very nice animated.</p><p>The home page is very customizable as you can reorder the section using drag-and-drop technique. Also you can customize any feature due to the powerful custom admin options.</p><p>PlanusWP is a nice and simple theme allows you to create content and bring attention to it. You don't need to worry about contact plugin, as the contact form is stand-alone. Just add your email adress and all is done.</p>">
						<img src="{{ asset('frontend/assets/work6-big.jpg') }}" alt="PlanusWP - One Page Wordpress Theme"/>
						<div class="overlay-content">
							<h4>PlanusWP - One Page Wordpress Theme</h4>
							<p>PlanusWP is a responsive one-page Wordpress theme built on Twitter Bootstrap 3 framework. PlanusWP theme is ment to present you as a designer or...</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- End of Portfolio Section -->


<!-- Testimonials Section -->
<!--
<section id="testimonials" class="parallax testimonials-section photo-section dark-section light-content">
	<div class="bg-overlay"></div>
	<div class="container">
		<h1 class="special-heading light-special">What my clients say</h1>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="quote-separator"></div>
				<div id="testimonials-rotator" class="testimonials-rotator">
					<div class="testimonial">
						<blockquote>
						  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
						  <footer>Silviu Stefu</footer>
						</blockquote>
					</div>
					<div class="testimonial">
						<blockquote>
						  <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.</p>
						  <footer>Albert Einstein</footer>
						</blockquote>
					</div>
					<div class="testimonial">
						<blockquote>
						  <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.</p>
						  <footer>Moby</footer>
						</blockquote>
					</div>
					<div class="testimonial">
						<blockquote>
						  <p>My body will not be a tomb for other creatures.</p>
						  <footer>Leonardo Da Vinci</footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!-- End of Testimonials Section -->


<!-- Team Section -->
<section id="team" class="team-section light-section dark-content">
	<div class="container">
		<h1 class="special-heading dark-special">Takım</h1>

		<div class="row">
			<div class="col-md-4">
				<div class="team-member">
					<div class="profile-picture">
						<figure><img src="{{ asset('frontend/assets/team1.jpg') }}" alt=""></figure>
						<div class="profile-overlay"></div>
						<div class="profile-social">
							<div class="icons-wrapper">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					<h3><a href="#">Metin Duman</a></h3>
					<span>Dekoratör</span>
					<div class="team-bio">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus quasi asperiores enim voluptas quisquam voluptatem.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member">
					<div class="profile-picture">
						<figure><img src="{{ asset('frontend/assets/team2.jpg') }}" alt=""></figure>
						<div class="profile-overlay"></div>
						<div class="profile-social">
							<div class="icons-wrapper">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					<h3><a href="#">Ramazan DUMAN</a></h3>
					<span>Tesisatçı</span>
					<div class="team-bio">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus quasi asperiores enim voluptas quisquam.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team-member">
					<div class="profile-picture">
						<figure><img src="{{ asset('frontend/assets/team3.jpg') }}" alt=""></figure>
						<div class="profile-overlay"></div>
						<div class="profile-social">
							<div class="icons-wrapper">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					<h3><a href="#">Kadir Gedikli</a></h3>
					<span>Tesisatçı</span>
					<div class="team-bio">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, fugiat, harum, adipisci accusantium minus quasi asperiores enim voluptas quisquam voluptatem quis.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Team Section -->


<!-- Services Section -->
<section id="services" class="parallax services-section photo-section dark-section light-content">
	<div class="bg-overlay"></div>
	<div class="container">
		<h1 class="special-heading light-special">İşlerimizde</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="service-col">
					<div class="service-icon">
						<figure><i class="fa fa-camera"></i></figure>
					</div>
					<h2><a href="#">Kalorifer Tamiri</a></h2>
					<p>Kalorifer Tamiri ve diğer onarım işlerinin yapılma sürecinde bulunuyoruz.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-col">
					<div class="service-icon">
						<figure><i class="fa fa-rocket"></i></figure>
					</div>
					<h2><a href="#">Sıhhi Tesisat</a></h2>
					<p>----------------------------------</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-col">
					<div class="service-icon">
						<figure><i class="fa fa-pencil"></i></figure>
					</div>
					<h2><a href="#">Dekorasyon</a></h2>
					<p>------------------------------------------------</p>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- End of Services Section -->


<!-- Blog Section -->
<section id="blog" class="blog-section light-section dark-content">
	<div class="container">
		<h1 class="special-heading dark-special">Biz ile ilgili Haberler</h1>

		@php
			$haberler = \App\HaberlerModel::whereIn("id",[1,2,3])->get();
		@endphp
		<div class="row">
			@foreach($haberler as $haber)
			<div class="col-sm-4 post-col">
				<figure><img src="{{ asset('HaberResimleri/hresim') }}/{{$haber->haber_resmi }}" alt=""></figure>
				<h2>{{$haber->haber_baslik}}</h2>
				<p><?= $haber->haber_icerik  ?></p>
				<a href="#" class="btn read-more">Read More</a>
			</div>
			@endforeach
		</div>


		<a href="#" class="btn btn-outline btn-darkblue more-blog">Read Our Blog</a>

	</div>
</section>
<!-- End of Blog Section -->



<!-- Contact Section -->
<section id="contact" class="contact-section light-section dark-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="special-heading dark-special">İletişim Kur</h1>
				<p class="section-description">Bizim ile iletişime geçmek için aşağıdaki formu doldurmanız yeterli. biz sizin ile  hemen irtibata geçeriz.</p>

					@php
						$iletisim_bilgi = \App\iletisimModel::get();
					@endphp
					@foreach($iletisim_bilgi as $bilgi)
				<div class="row contact-informations">
					<div class="col-sm-4">
						<div class="contact-info clearfix">
							<i class="fa fa-map-marker"></i>
							<span><?= $bilgi->adres ?></span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-info clearfix">
							<i class="fa fa-envelope"></i>
							<span>{{$bilgi->sirket_adi}}</span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-info clearfix">
							<i class="fa fa-phone"></i>
							<span>{{$bilgi->telefon}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<div id="result"></div>

				<form id="contact_form" class="contact-form" action="http://www.picseel.com/themes/crafto/contact.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="nameinput" placeholder="Adınız ve Soyadınız" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control input-lg" id="emailinput" placeholder="E-Posta" name="email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="10" name="message" placeholder="Mesajınız"></textarea>
					</div>
					@php

						$sayi1 =  rand(1,9);
						$sayi2 = rand(1,9);
						$toplam = $sayi1 + $sayi2;
					@endphp
					<div class="form-group">
						<input type="text" class="form-control input-lg" id="humaninput" placeholder="{{$sayi1}} + {{$sayi2}} =" name="human">
					</div>
					<div class="form-group">
						<button id="submit_btn" type="submit" class="btn btn-outline-white btn-big">İletişim Kur</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End of Contact Section -->


<!-- Footer -->
<section id="map" class="map-section" data-lat="44.86056" data-long="24.86778" data-zoom="17" data-map-type="satellite">
	<!-- <div id="map-canvas" style="width:100%; height:400px;" class="googleMap"></div> -->
</section>


<!-- Footer -->
<footer class="footer photo-section dark-section light-content">
	<div class="bg-overlay"></div>
	<div class="container">
		<div class="social-icons light-icons">
			@foreach($sosyalmedya as $sos)
					@if(!empty( trim($sos->facebook) ) )
					 <a href="{{$sos->facebook}}"><i class="fa fa-facebook"></i></a>
					 @endif
					 @if(!empty( trim($sos->twitter) ) )
					 <a href="{{$sos->twitter}}"><i class="fa fa-twitter"></i></a>
					 @endif
					 @if(!empty( trim($sos->instagram) ) )
					 <a href="{{ $sos->instagram }}"><i class="fa fa-instagram"></i></a>
					 @endif
					 @if(!empty( trim( $sos->pinterest) ) )
					 <a href="{{ $sos->pinterest }}"><i class="fa fa-pinterest"></i></a>
					 @endif
					 @if(!empty( trim($sos->youtube) ) )
					 <a href="{{ $sos->youtube }}"><i class="fa fa-youtube"></i></a>
					 @endif
					 @if(!empty(trim($sos->linkedin) ) )
					 <a href="{{ $sos->linkedin }}"><i class="fa fa-linkedin"></i></a>
					 @endif
					 @if(!empty( trim($sos->tumblr) ) )
					 <a href="{{ $sos->tumblr }}"><i class="fa fa-tumblr"></i></a>
					 @endif
					 @if(!empty( trim($sos->vimeo) ) )
					 <a href="{{ $sos->vimeo }}"><i class="fa fa-vimeo-square"></i></a>
					 @endif
					 @if(!empty( trim($sos->flickr) ) )
					 <a href="{{ $sos->flickr }}"><i class="fa fa-flickr"></i></a>
					 @endif
					 @if(!empty( trim($sos->vk) ) )
					 <a href="{{ $sos->vk }}"><i class="fa fa-vk"></i></a>
					 @endif
					 @if(!empty( trim($sos->googleplus) ) )
					 <a href="{{ $sos->googleplus }}"><i class="fa fa-google-plus"></i></a>
					 @endif

			@endforeach
		</div>
		<p>Veba Teknoloji Tarafından Editlenip Düzenlenmiştir.</p>
	</div>
</footer>

<div class="scrolltotop">
	<i class="fa fa-chevron-up"></i>
</div>
<!-- End of Footer -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('frontend/js/jquery-latest.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/modernizr.custom.47152.js') }}"></script>
<script src="{{ asset('frontend/js/modernizr-ie.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.textrotator.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.simple-text-rotator.min.js') }}"></script>
<script src="{{ asset('frontend/js/grid.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>

<script>

$(document).ready(function(){
	$("#keriz").click(function(){

		$.ajax({
			type:'POST',
			url:'ajaxtest.php',
			data:{ ad:"sercan",soyad:"JAVA" },
			dataType:'html',
			success:function(cevap,sonucVerisi){
				$("#sonuc").append(cevap);
			},
			error:function(){
				$("#sonuc").text("hata");
			}
		});// AJAX

	});//click
}); //document.ready


</script>
<div id="keriz" class="style=cursor:pointer;"> Tikla Al bilgileri</div>
	<span id="sonuc"> </span>

</body>

<!-- Mirrored from www.picseel.com/themes/crafto/ by HTTrack Website Copier/3.x [XR&CuO$'2014], Sat, 21 Oct 2017 14:58:26 GMT -->
</html>
