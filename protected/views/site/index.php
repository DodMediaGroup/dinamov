<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ihover.css"/>
<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="tp-banner-container">
<div class="tp-banner pi-revolution-slider" >
<ul class="">	

<!-- SLIDE -->
<li data-transition="fade" data-slotamount="2" data-masterspeed="1000" >
<!-- MAIN IMAGE -->
<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide-01.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
<!-- LAYERS -->

<!-- LAYER NR. 1 -->
<div class="tp-caption sfl fadeout"
	 data-x="600"
	 data-y="90"
	 data-speed="800"
	 data-start="1500"
	 data-easing="Power4.easeOut"
	 data-endspeed="300"
	 data-endeasing="Power1.easeIn"
	 data-captionhidden="on"
	 style="z-index: 3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide-01-01.png" alt="">
</div>

<!-- LAYER NR. 3 -->
<div class="tp-caption sft str"
	 data-x="45" data-hoffset="0"
	 data-y="157"
	 data-speed="500"
	 data-start="2400"
	 data-easing="Back.easeInOut"
	 data-endspeed="300"
	 style="z-index: 5; font-size: 50px;font-family:'nexa_heavyregular';  color: #FFF; font-weight: 500; text-transform: uppercase; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
	 ENERGÍA SOLAR
</div>

<!-- LAYER NR. 4 -->
<div class="tp-caption sfl str"
	 data-x="45" data-hoffset="0"
	 data-y="227"
	 data-speed="500"
	 data-start="2600"
	 data-easing="Back.easeInOut"
	 data-endspeed="300"
	 style="z-index: 6; font-size: 32px; font-family: 'nexa_lightregular';color: #fff; font-weight: 300; line-height: 28px; padding: 12px 16px; border-radius: 3px;">
	 SOLUCIONES RENOVABLES
</div>

<!-- LAYER NR. 5 -->
<div class="tp-caption sfb str"
	 data-x="60" data-hoffset="0"
	 data-y="303"
	 data-speed="500"
	 data-start="2800"
	 data-easing="Back.easeInOut"
	 data-endspeed="300"
	 style="z-index: 7; font-size: 19px; font-family: 'nexa_lightregular';">
	 <a style="font-size:19px" href="http://themeforest.net/item/aura-responsive-multipurpose-template/7786132" class="btn pi-btn-base">
		VER MÁS
	</a>
</div>

</li>	

</ul>
</div>
</div>

<span class="revolution-slider"></span>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->



<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white">
	<div class="pi-section pi-padding-bottom-20">
		<h4 class="pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="#" class="pi-link-dark">SERVICIOS</a>
				</h4>
		<br><br>

		<?php $contador=0 ?>
		<div class="pi-row pi-grid-big-margins">
		<?php foreach ($aplicaciones as $a): ?>
			<?php if ($contador<8): ?>
				<!-- Col 4 -->
			<div class="pi-col-sm-3 pi-padding-bottom-40" >
			
				<div class="pi-icon-box-vertical pi-icon-box-vertical-icon-bigger pi-text-center">
				
					<div class="ih-item circle effect17" style="margin:auto;height:180px;width:180px">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/<?php echo $a->id_servicio.'_'.$a->id_aplicacion.'_'.Yii::app()->Herramientas->normalizarUrl($a->nombre_aplicacion) ?>">
							<div class="img" style="height:180px;width:180px">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $a->imagen_aplicacion ?>" alt="">
						</div>
						<div class="info" style="padding-top:25px;">
							<h3>Ver más</h3>
						</div>
						<br><br>
						<h5 class="pi-weight-700 pi-uppercase"><a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/<?php echo $a->id_servicio.'_'.$a->id_aplicacion.'_'.Yii::app()->Herramientas->normalizarUrl($a->nombre_aplicacion) ?>" class="pi-link-dark servicios " style="color: rgb(77,77,77);"><?php echo $a->nombre_aplicacion ?></a></h5>
						</a>

					</div>
					<br><br>
					
		
				</div>
				
			</div>
			<!-- End col 4 -->
			<?php if ($contador==3): ?>
				</div>
				<div class="pi-row pi-grid-big-margins">
			<?php endif;  $contador++?>
			<?php endif ?>
		<?php endforeach; ?>
		</div>	
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
		
<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="tp-banner-container pi-section-parallax">
<div class="tp-banner pi-revolution-slider2" >
<ul class="">	

	<!-- SLIDE -->
	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
		<!-- MAIN IMAGE -->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide2-01.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
		<!-- LAYER NR. 1 -->
		<div class="tp-caption sfl fadeout"
			 data-x="300"
			 data-y="120"
			 data-speed="800"
			 data-start="1500"
			 data-easing="Power4.easeOut"
			 data-endspeed="300"
			 data-endeasing="Power1.easeIn"
			 data-captionhidden="on"
			 style="z-index: 3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/casa.png" alt="">
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="415" data-hoffset="0"
			 data-y="67"
			 data-speed="500"
			 data-start="2400"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 4; font-size: 22px; font-family: 'nexa_blackregular';color: #FFF; font-weight: 500; text-transform: uppercase; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 ¿COMO TRABAJAMOS?
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="415" data-hoffset="0"
			 data-y="117"
			 data-speed="500"
			 data-start="2800"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 5; font-size: 64px; font-family: 'nexa_blackregular';color: #FFF; font-weight: 500; text-transform: uppercase; line-height: 55px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 TIENES UNA <br> NECESIDAD
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="305" data-hoffset="0"
			 data-y="237"
			 data-speed="500"
			 data-start="3400"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 6; font-size: 28px;font-family: 'nexa_blackregular'; color: #FFF; font-weight: 500; text-transform: uppercase; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 comunícate con nosotros
		</div>
	</li>
	<!-- SLIDE -->
	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
		<!-- MAIN IMAGE -->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/landin-slide2-3.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
		<!-- LAYER NR. 1 -->
		<div class="tp-caption sfl fadeout"
			 data-x="265"
			 data-y="100"
			 data-speed="800"
			 data-start="1500"
			 data-easing="Power4.easeOut"
			 data-endspeed="300"
			 data-endeasing="Power1.easeIn"
			 data-captionhidden="on"
			 style="z-index: 3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/iconos/pila.png" alt="">
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="435" data-hoffset="0"
			 data-y="107"
			 data-speed="500"
			 data-start="1800"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 5; font-size: 38px; font-family: 'nexa_blackregular';color: #FFF; font-weight: 400; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 Identificamos <br> 
			 soluciones eficientes <br>
			 para tu necesidad <br>
			 específica
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="275" data-hoffset="0"
			 data-y="200"
			 data-speed="500"
			 data-start="1400"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 6; font-size: 44px;color: #FFF; font-weight: 600; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="20" data-easing="easeInCirc" data-duration="4000" data-frames-per-second="0">
				<div class="pi-counter-number">20</div>
			 </div>
		</div>

		<div class="tp-caption sfl fadeout"
			 data-x="260"
			 data-y="260"
			 data-speed="800"
			 data-start="1500"
			 data-easing="Power4.easeOut"
			 data-endspeed="300"
			 data-endeasing="Power1.easeIn"
			 data-captionhidden="on"
			 style="z-index: 3;color: #fff;line-height: 16px ;text-transform: uppercase;">
			 menos de inversión <br>
			 en infraestructura
		</div>
	</li>	
<!-- SLIDE -->
	<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
		<!-- MAIN IMAGE -->
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/landin-slide2-2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
		<!-- LAYERS -->
		<!-- LAYER NR. 1 -->
		<div class="tp-caption sfl fadeout"
			 data-x="270"
			 data-y="100"
			 data-speed="800"
			 data-start="1500"
			 data-easing="Power4.easeOut"
			 data-endspeed="300"
			 data-endeasing="Power1.easeIn"
			 data-captionhidden="on"
			 style="z-index: 3"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/iconos/pila.png" alt="">
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="435" data-hoffset="0"
			 data-y="107"
			 data-speed="500"
			 data-start="1800"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 5; font-size: 38px; font-family: 'nexa_blackregular';color: #FFF; font-weight: 400; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 Instalación y <br> 
			 seguimiento para <br>
			 obtener clientes <br>
			 felices
		</div>
		<!-- LAYER NR. 3 -->
		<div class="tp-caption sft str"
			 data-x="275" data-hoffset="0"
			 data-y="200"
			 data-speed="500"
			 data-start="1400"
			 data-easing="Back.easeInOut"
			 data-endspeed="300"
			 style="z-index: 6; font-size: 44px;color: #FFF; font-weight: 600; line-height: 40px;	 padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
			 <div class="pi-counter pi-counter-simple" data-count-from="0" data-count-to="100" data-easing="easeInCirc" data-duration="4000" data-frames-per-second="0">
				<div class="pi-counter-number">100</div>
			 </div>
		</div>

		<div class="tp-caption sfl fadeout"
			 data-x="260"
			 data-y="260"
			 data-speed="800"
			 data-start="1500"
			 data-easing="Power4.easeOut"
			 data-endspeed="300"
			 data-endeasing="Power1.easeIn"
			 data-captionhidden="on"
			 style="z-index: 3;color: #fff;line-height: 16px ;text-transform: uppercase;text-align:center;">
			 acompañamiento en <br>
			 el proceso
		</div>
	</li>	
</ul>
</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white pi-border-top">
	<div class="pi-section pi-padding-bottom-20">
		
		<!-- Row -->
		<div class="pi-row" style="text-align: justify">
			
			<!-- Col 6 -->
			<div class="pi-col-sm-6 pi-margin-bottom-30 texto-noticias">
				
				<h4 class=" pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/noticias" class="pi-link-dark">NOTICIAS</a>
				</h4>
			
				<?php foreach ($noticias as $noticia):?>
					<?php $fecha_div= explode("-",$noticia->fecha) ?>
					<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
					<div class="pi-news-date">
						<?php echo $fecha_div[2]?>
						<span><?php echo $meses[$fecha_div[1]]?></span>
					</div>
					<h2 class="h5 pi-margin-top-minus-5 pi-margin-bottom-5">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_noticia/<?php echo $noticia->id ?>" class="pi-link-dark titulo-noticias-blog" style="color: rgb(77,77,77)"><?php echo $noticia->titulo?></a>
					</h2>
					<div class="contenido_resumido_noticia">
						<?php echo $noticia->contenido ?> 
					</div>
					<a class="link_resumido" href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_noticia/<?php echo $noticia->id ?>">Leer más</a>
					<hr class="pi-divider pi-divider-dashed">
				<?php endforeach; ?>				
			</div>
			<!-- End col 6 -->
			
			<!-- Col 6 -->
			<div class="pi-col-sm-6 pi-padding-bottom-30 texto-noticias">
				<h4 class=" pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/blogs" class="pi-link-dark">BLOG</a>
				</h4>
				<?php foreach ($blogs as $blog): ?>
					<!-- Post item -->
					<div class="pi-img-w pi-img-round-corners pi-img-left pi-img-shadow" style="width: 170px;">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>">
						<div class="imagen-blog-index" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $blog->imagen ?>)"></div>
						<span class="pi-img-overlay pi-img-overlay-white">
						</span>
						</a>
					</div>
					<h2 class="h5 pi-margin-top-minus-5 pi-margin-bottom-5">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>" class="pi-link-dark titulo-noticias-blog" style="color: rgb(77,77,77)" ><?php echo $blog->titulo?></a>
					</h2>
					<ul class="pi-meta pi-margin-bottom-10">
						<?php $fecha_div= explode("-",$blog->fecha) ?>
						<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
						<li class="fecha-blog"><i class="icon-clock"></i><?php echo $meses[$fecha_div[1]]?> <?php echo $fecha_div[2]?>, <?php echo $fecha_div[0]?> </li>
					</ul>
					
					<div class="contenido_resumido_blog">
						<?php echo $blog->contenido ?> 
					</div>
					<a class="link_resumido" href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>">Leer más</a>
					
					<!-- End post item -->
					<hr class="pi-divider pi-divider-dashed">
				<?php endforeach; ?>
			</div>
			<!-- End col 6 -->
			
		</div>
		<!-- End row -->
				
	</div>
</div>

<script type="text/javascript">
	$(".servicios").each(function(index, el) {
		var value= $.trim($(this).html());
		if(value.length>14 && value.length<28){
			$(this).parent().css('margin-top', '-16px');
			$(this).parent().parent().children('.desc-servicio').css('margin-top', '26px');
		}

		if(value.length>28){
			$(this).parent().css('margin-top', '-25px');
			$(this).parent().parent().children('.desc-servicio').css('margin-top', '14px');
		}
	});

	$(".effect17").hover(function() {
		$(this).children('h5').children('a').css('color', '#bdc530');
	}, function() {
		$(this).children('h5').children('a').css('color', 'rgb(77,77,77)');
	});
</script>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->


</div>