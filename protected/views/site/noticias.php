<div id="page">
<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/">Inicio</a></li>
				<li>Noticias</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
<!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white">
	<div class="pi-section pi-padding-bottom-10">
		<div class="pi-row">
			<div class="pi-col-sm-9">
				<!-- Post -->
				<?php foreach ($noticias as $noticia):?>
					<!-- Post thumbnail -->
					<div class="pi-img-w pi-img-round-corners pi-img-shadow-light pi-margin-bottom-25">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_noticia/<?php echo $noticia->id ?>">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $noticia->imagen?>" alt="">
							<span class="pi-img-overlay pi-no-padding pi-img-overlay-dark">
								<span class="pi-caption-centered">
									<span>
										<span class="pi-caption-icon pi-caption-scale icon-plus"></span>
									</span>
								</span>
							</span>
						</a>
					</div>
					<!-- End post thumbnail -->
					<!-- Post content -->
					<h2 class="h3">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_noticia/<?php echo $noticia->id ?>" class="pi-link-dark"><?php echo $noticia->titulo?></a>
					</h2>
					<ul class="pi-meta">
						<?php $fecha_div= explode("-",$noticia->fecha) ?>
						<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
						<li><i class="icon-clock"></i><?php echo $meses[$fecha_div[1]]?> <?php echo $fecha_div[2]?>, <?php echo $fecha_div[0]?></li>
					</ul>
					<p>
						<?php echo ucfirst(substr($noticia->contenido,0,250))."..." ?>
					</p>
					<p>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_noticia/<?php echo $noticia->id ?>" class="btn pi-btn-base">
							Leer
						</a>
					</p>
					<!-- End post content -->
					<!-- End post -->
					<hr class="pi-divider pi-divider-dashed pi-divider-big">
				<?php endforeach;?>					

				<div class="pi-pagenav pi-padding-bottom-40">
					<ul>
						<!--<li><a href="#">Anterior</a></li>-->
						<li><a href="#" class="pi-active">1</a></li>
						<!--<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">115</a></li>-->
						<!--<li><a href="#">Siguiente</a></li>-->
					</ul>
				</div>
				
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