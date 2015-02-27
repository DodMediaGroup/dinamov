<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/">Inicio</a></li>
				<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/noticias">Noticias</a></li>
				<li><?php echo ucfirst(substr($post->contenido,0,30))."..." ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white pi-slider-enabled piTooltips piSocials">
	<div class="pi-section pi-padding-bottom-10">
		
		<div class="pi-row">
		
			<div class="pi-col-sm-9 pi-padding-bottom-40">
			
				<!-- Slider -->
				<div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover pi-margin-bottom-40">
					<div class="pi-slider pi-slider-animate-opacity">
						<!-- Slide -->
						<div class="pi-slide">
							<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">

								<a href="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $post->imagen ?>" class="pi-colorbox"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $post->imagen ?>" alt=""/></a>

							</div>
						</div>
						<!-- End slide -->
					</div>
				</div>
				<!-- End slider -->
				
				<h2 class="pi-weight-600">
					<?php echo $post->titulo ?>
				</h2>
				
				<ul class="pi-meta">
					<?php $fecha_div= explode("-",$post->fecha) ?>
					<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
					<li><i class="icon-clock"></i><?php echo $meses[$fecha_div[1]]?> <?php echo $fecha_div[2]?>, <?php echo $fecha_div[0]?></li>
				</ul>
			
				<p>
					<span class="pi-dropcap"><?php echo ucfirst(substr($post->contenido,0,1)) ?></span><?php echo substr($post->contenido,1,100000) ?>
				</p>
				
			</div>
		
			<div class="pi-sidebar pi-col-sm-3">
				<!-- Categories -->
				<div class="pi-sidebar-block pi-padding-bottom-40">
					<h3 class="h6 pi-uppercase pi-weight-700 pi-letter-spacing pi-has-bg pi-margin-bottom-15">
						Categorías
					</h3>
					<ul class="pi-list-with-icons pi-list-icons-right-open">
						<li><a href="#">Creativo</a> (2)</li>
						<li><a href="#">Diseño</a> (9)</li>
						<li><a href="#">Fotografía</a> (9)</li>
						<li><a href="#">Imagenes</a> (2)</li>
						<li><a href="#">Videos</a> (4)</li>
					</ul>
				</div>
				<!-- End categories -->		
			</div>
			
		</div>
		
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>