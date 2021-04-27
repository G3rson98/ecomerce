<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>LABORATORIO</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{asset('/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{asset('/css/niceselect.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('/css/animate.css')}}">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{asset('/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('/css/owl-carousel.css')}}">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{asset('/css/slicknav.min.css')}}">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
</head>

<body class="js">
	@include('layout.preloader')
	<header class="header shop">
		@include('layout.carrito')
		<!-- aqui termina la parte del carrito , cuenta y lista de deseo-->
		@include('layout.header')
		<!-- CATEGORIAS, PAGINA INICIO,PRODUCTOS BRASILEROS....-->
	</header>
	<!--/ End Header -->
	<!-- Start Product Area -->
	<div class="product-area section">
		@yield('destacados')
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>@yield('titulo')</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<!-- <div class="nav-main"> -->
							<!-- Tab Nav -->
							<!-- <ul class="nav nav-tabs" id="myTab" role="tablist"> -->
								<!-- <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#man" role="tab">Hombre</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Mujer</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Niños</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Dispositivos Medicos</a></li> -->
							<!-- </ul> -->
						<!-- </div> -->
						<!--/  zona del marco de compra-->
						@yield('contenido')
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Start Most Popular -->

	<!-- End Most Popular Area -->
	<!-- Modal end -->
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<img src="images/icono.png" alt="#">
							</div>
							<p class="text"></p>
							<p class="call">LLAMANOS: <span><a href="">+591 62111467</a></span></p>
							<p class="call">CORREO: <span><a href=""> vitalbox3@gmail.com</a></span></p>
							<p class="call">NUESTRAS PAGINAS:</p>
							<div class="single-footer social">
							<h4></h4>
							<!-- Single Widget -->
							<!-- End Single Widget -->
							<ul>
								<li><a target="_blank"href="https://www.facebook.com/Vitalbox-108008618093454"><i class="ti-facebook"></i> FACEBOOK</a></li>
								<li><a target="_blank" href="https://instagram.com/vitalbox.bo?igshid=1or7v79iru3vi"><i class="ti-instagram"></i> INSTAGRAM</a></li>
							</ul>
						</div>

						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
	</footer>
	<!-- /End Footer Area -->
	<!-- Jquery -->
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('/js/active.js')}}"></script>
	<!-- sweet alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	@yield('javascript')

	<script>
    function descripcion(a) {
        var producto = JSON.parse(a);
        //alert(producto.id);
        Swal.fire({
            title: '<strong>'+producto.Nombre+'</strong>',
            icon: 'info',
            html: '<p><small><b>Descripcion: </b>'+producto.Descripcion+'</small></p>'+'<br>'+
                '<p><small><b>Recomendado para: </b>'+producto.Categoria_Edad+'</small></p>'
            ,
            showCloseButton: false,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-thumbs-up"></i> OK!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
        });

    }
</script>
</body>

</html>