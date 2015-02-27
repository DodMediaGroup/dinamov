<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="author" content="Javier Esquivel Ávila | DOD">
	<meta name="keywords" content="dinamov,energía,renovable">
	<meta name="description" content="Dinamov es una empresa que cree firmemente que entre todos podemos empezar a mitigar el impacto negativo que hemos causado a nuestro preciado hogar">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/rs-plugin/css/pi.settings.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/typo.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/colorbox/colorbox.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/portfolio.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/google-maps.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/counters.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/social.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/page-nav.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/timeline.min.css"/>
	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css'/>
	<!--Fonts with Icons-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/fontello/css/fontello.min.css"/>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/jquery-1.11.0.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/jquery.scrollTo.min.js"></script>
</head>
<body>

<div id="pi-all">

<!-- Header -->
<div class="pi-header">



<div class="pi-header-sticky">
<!-- Header row -->
<div class="pi-section-w pi-section-white pi-shadow-bottom pi-row-reducible">
<div class="pi-section pi-row-lg">

<!-- Logo -->
<div class="pi-row-block pi-row-block-logo">
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-base.png" alt=""></a>
</div>
<!-- End logo -->

<!-- Menu -->
<div class="pi-row-block pi-pull-right">
	<ul class="pi-simple-menu pi-has-hover-border pi-full-height pi-hidden-sm">
		<li>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/quienes_somos/">
				<span id="quienes-somos" class="hover-azul">
					<p class="menu_modificado">Quiénes Somos</p>
				</span>
			</a>
		<li>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/como_trabajamos/">
				<span id="comotrabajamos" class="hover-azul">
					<p class="menu_modificado">Cómo Trabajamos</p>
				</span>
			</a>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/">
			<span id="servicios" class="hover-azul">
				<p class="menu_modificado">Servicios</p>
			</span>
		</a>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/contacto">
			<span id="contacto" class="hover-azul">
				<p class="menu_modificado">Contacto</p>
			</span>
		</a>
	</ul>
	<div class="pi-row-block pi-pull-right pi-hidden-md">
			<ul class="pi-social-icons-simple pi-small">
				<li><a href="#" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
				<li><a href="#" class="pi-social-icon-dribbble"><i class="icon-youtube-play"></i></a></li>
			</ul>
		</div>
</div>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>
<!-- End mobile menu button -->

		<!-- Mobile menu -->
		<div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
			<div class="pi-section-menu-mobile">

				<ul class="pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark">
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/quienes_somos"><span><p class="menu_modificado">Quienes Somos</p></span></a>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/como_trabajamos"><span><p class="menu_modificado">Cómo Trabajamos</p></span></a>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios"><span><p class="menu_modificado">Servicios</p></span></a>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/contacto"><span><p class="menu_modificado">Contacto</p></span></a>
				</ul>

			</div>
		</div>
		<!-- End mobile menu -->

</div>
</div>
<!-- End header row -->
</div>

</div>
<!-- End header -->

<?php echo $content; ?>

<!-- Footer -->
<!-- Widget area -->
<div class="pi-section-w pi-border-bottom pi-border-top-light pi-section-dark">
	<div class="pi-section pi-padding-bottom-10">

		<!-- Row -->
		<div class="pi-row">

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-padding-bottom-30">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					<a href="#" class="pi-link-no-style">Dinamov</a>
				</h6>

				<ul class="pi-list-with-icons pi-list-icons-right-open pi-link-no-style">
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/">Inicio</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/quienes_somos/">Quiénes somos</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/como_trabajamos/">Como trabajamos</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/">Servicios</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/contacto/">Contacto</a>
					</li>
				</ul>

			</div>
			<!-- End col 4 -->

			<div class="pi-clearfix pi-hidden-lg-only pi-hidden-md-only"></div>

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					Contacto
				</h6>
				<?php $cont=Contacto::model()->findByPk(1) ?>
				<!-- Contact info -->
				<ul class="pi-list-with-icons pi-list-big-margins">

					<li>
						<span class="pi-bullet-icon"><i class="icon-location"></i></span>
						<strong>Dirección:</strong> <?php echo $cont->DIRECCION ?>
					</li>

					<li>
						<span class="pi-bullet-icon"><i class="icon-phone"></i></span>
						<?php echo $cont->TELEFONOS ?>
					</li>

					<li>
						<span class="pi-bullet-icon"><i class="icon-mail"></i></span>
						<strong>Correo:</strong> <a href="<?php echo $cont->CORREO ?>"><?php echo $cont->CORREO ?></a>
					</li>

				</ul>
				<!-- End contact info -->
				<ul class="pi-social-icons pi-small pi-round pi-jump pi-colored-bg clearFix">
					<li><a href="#" class="pi-social-icon-facebook"><i class="icon-facebook"></i><i class="icon-facebook"></i></a></li>
				</ul>

			</div>
			<!-- End col 4 -->

			<!-- Col 4 -->
			<div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">

				<h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
					COMUNÍCATE CON NOSOTROS
				</h6>

				<!-- Contact form -->
				<form role="form" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/contacto">
					<div class="pi-error-container"></div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-2xs-6">
							<div class="form-group">
								<div class="pi-input-with-icon">
									<div class="pi-input-icon"><i class="icon-user"></i></div>
									<input name="nombres" required class="form-control form-control-name" id="exampleInputName"
										   placeholder="Tu nombre">
								</div>
							</div>
						</div>
						<div class="pi-col-2xs-6">
							<div class="form-group">
								<div class="pi-input-with-icon">
									<div class="pi-input-icon"><i class="icon-mail"></i></div>
									<input type="email" required name="correo" class="form-control form-control-email" id="exampleInputEmail"
										   placeholder="Tu correo">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="telefono" value="">
						<div class="pi-input-with-icon">
							<div class="pi-input-icon"><i class="icon-pencil"></i></div>
							<textarea name="mensaje" required class="form-control form-control-comments" id="exampleInputMessage"
									  placeholder="¿Cómo podemos ayudarte?"
									  rows="3"></textarea>
						</div>
					</div>
					<p>
						<button type="submit" class="btn btn-degradado">Enviar</button>
					</p>
				</form>
				<!-- End contact form -->

			</div>
			<!-- End col 4 -->

		</div>
		<!-- End row -->
		
	</div>
	<div class="row">
			<div class="col-sm-12">
				<div class="final_footer"></div>
			</div>
		</div>
</div>
<!-- End widget area -->
<!-- End footer -->

</div>
<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.googleMapStyles.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/jquery.gmap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/jquery.touchSwipe.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/gauge.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/inview.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/rs-plugin/js/jquery.themepunch.revolution.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/requestAnimationFramePolyfill.min.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.global.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.slider.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.init.slider.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/3dParty/jquery.easing.1.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.counter.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.init.counter.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.parallax.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.init.parallax.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.init.revolutionSlider.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pi.init.map.js"></script>


</body>
</html>