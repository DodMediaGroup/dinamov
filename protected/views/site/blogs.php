<div id="page">

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/">Inicio</a></li>
				<li>Blogs Dinamov</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white">
<div class="pi-section">

	<!-- Blog Timeline -->
	<div class="pi-timeline">

		<div class="pi-timeline-date">Enero 2015</div>
		<?php $contador=0; ?>
		<?php foreach ($blogs as $blog):?>
			<!-- Blog timeline item -->
			<div class="pi-timeline-item pi-timeline-item-<?php if($contador%2==0):echo 'left';else:echo 'right';endif?>">
				<?php $fecha_div= explode("-",$blog->fecha) ?>
				<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
				<div class="pi-timeline-item-date"><span><?php echo $fecha_div[2]?> </span><span><?php echo $meses[$fecha_div[1]]?></span></div>
				<!-- Post -->
				<!-- Post thumbnail -->
				<div class="pi-img-w pi-img-round-corners pi-img-shadow-light pi-margin-bottom-25">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>">
						
						<div class="image-blog-blog" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $blog->imagen?>)"></div>
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
				<h2 class="h3" style="text-transform:uppercase">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>" class="pi-link-dark"><?php echo $blog->titulo ?></a>
				</h2>
				<div style="height:40px; overflow:hidden">
					<?php echo $blog->contenido ?> 
				</div>
				<br>
				<p>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/ver_blog/<?php echo $blog->id ?>" class="btn pi-btn-base">
						Leer
					</a>
				</p>
				<!-- End post content -->
				<!-- End post -->
			</div>
			<!-- End Blog timeline  item -->
			<?php $contador++; ?>
		<?php endforeach; ?>
	</div>
	<!-- End Blog timeline -->

</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>