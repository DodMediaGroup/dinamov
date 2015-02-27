<script type="text/javascript">
	$("#quienes-somos").addClass("active");
</script>
<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="tp-banner-container">
<div class="tp-banner pi-revolution-slider" >
<ul class="">	

<!-- SLIDE -->
<li data-transition="fade" data-slotamount="2" data-masterspeed="1000" >
<!-- MAIN IMAGE -->
<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide3-01.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
<!-- LAYERS -->


<!-- LAYER NR. 3 -->
<div class="tp-caption sft str"
	 data-x="-20" data-hoffset="0"
	 data-y="117"
	 data-speed="500"
	 data-start="2400"
	 data-easing="Back.easeInOut"
	 data-endspeed="300"
	 style="z-index: 3; text-align: center; font-family:'nexa_heavyregular';font-size: 45px; color: #FFF; font-weight: 500; text-transform: uppercase; line-height: 43px;right: 70px; padding: 12px 16px; border-radius: 3px; box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
	<?php echo $quienesSomos->LEYENDA ?>
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
		
		<!-- Row -->
		<div class="pi-row pi-grid-big-margins">
			
			<!-- Col 4 -->
			<div class="pi-col-sm-4 pi-padding-bottom-40" >
				<h4 class="pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="#" class="pi-link-dark">quiénes somos</a>
				</h4>
				<div class="pi-icon-box-vertical pi-icon-box-vertical-icon-bigger">
					<div class="desc-servicio" style="color: rgb(77,77,77); text-align: justify">
						<?php echo $quienesSomos->QUIENES_SOMOS ?>
					</div>
					
				</div>
			</div>
			<!-- End col 4 -->
			
			<!-- Col 4 -->
			<div class="pi-col-sm-4 pi-padding-bottom-40" >
				<h4 class="pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="#" class="pi-link-dark">misión</a>
				</h4>
				<div class="pi-icon-box-vertical pi-icon-box-vertical-icon-bigger">
					<div class="desc-servicio" style="color: rgb(77,77,77); text-align: justify">
						<?php echo $quienesSomos->MISION ?>
					</div>	
				</div>
			</div>
			<!-- End col 4 -->
			
			<!-- Col 4 -->
			<div class="pi-col-sm-4 pi-padding-bottom-40" >
				<h4 class="pi-uppercase pi-has-bg pi-margin-bottom-30">
					<a href="#" class="pi-link-dark">visión</a>
				</h4>
				<div class="pi-icon-box-vertical pi-icon-box-vertical-icon-bigger">
					<div class="desc-servicio" style="color: rgb(77,77,77); text-align: justify">
						<?php echo $quienesSomos->VISION ?>
					</div>
				</div>
			</div>
			<!-- End col 4 -->
		</div>
		<!-- End row -->
				
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
		
<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="tp-banner-container pi-section-parallax">
<div class="tp-banner pi-revolution-slider" >
<ul class="">	

<!-- SLIDE -->
<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
<!-- MAIN IMAGE -->
<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slide4-01.jpg"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
<!-- LAYERS -->

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="70"
		 data-y="100"
		 data-speed="800"
		 data-start="1500"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 3">
		 <img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $tipsQs[0]->IMAGEN_TIP ?>" alt="">
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="70"
		 data-y="230"
		 data-speed="800"
		 data-start="1800"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff;text-align:center; font-size: 20px;text-transform:uppercase">
		 <h4><?php echo $tipsQs[0]->NOMBRE_TIP ?></h4>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="30"
		 data-y="295"
		 data-speed="800"
		 data-start="1800"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 16px;text-align: justify; width:220px;">
		 <?php echo $tipsQs[0]->DESCRIPCION_TIP ?>
	</div>
	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="350"
		 data-y="100"
		 data-speed="800"
		 data-start="1600"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $tipsQs[1]->IMAGEN_TIP ?>" alt="">
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="320"
		 data-y="250"
		 data-speed="800"
		 data-start="1600"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 20px;text-transform:uppercase">
		 <h4><?php echo $tipsQs[1]->NOMBRE_TIP ?></h4>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="305"
		 data-y="295"
		 data-speed="800"
		 data-start="1600"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 16px;text-align: justify; width:220px;">
		 <?php echo $tipsQs[1]->DESCRIPCION_TIP ?>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="610"
		 data-y="100"
		 data-speed="800"
		 data-start="1700"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $tipsQs[2]->IMAGEN_TIP ?>" alt="">
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="595"
		 data-y="235"
		 data-speed="800"
		 data-start="1700"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 20px; text-align: center;text-transform:uppercase ">
		 <h4><?php echo $tipsQs[2]->NOMBRE_TIP ?></h4>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="575"
		 data-y="295"
		 data-speed="800"
		 data-start="1700"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 16px;text-align: justify; width:220px;">
		 <?php echo $tipsQs[2]->DESCRIPCION_TIP ?>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="880"
		 data-y="100"
		 data-speed="800"
		 data-start="1800"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 6"><img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $tipsQs[3]->IMAGEN_TIP ?>" alt="">
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="845"
		 data-y="250"
		 data-speed="800"
		 data-start="1800"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff; font-size: 20px;text-transform:uppercase">
		 <h4><?php echo $tipsQs[3]->NOMBRE_TIP ?></h4>
	</div>

	<!-- LAYER NR. 1 -->
	<div class="tp-caption sfl fadeout"
		 data-x="845"
		 data-y="295"
		 data-speed="800"
		 data-start="1800"
		 data-easing="Power4.easeOut"
		 data-endspeed="300"
		 data-endeasing="Power1.easeIn"
		 data-captionhidden="on"
		 style="z-index: 4;color: #fff ;font-size: 16px;text-align: justify; width:220px;">
		 <?php echo $tipsQs[3]->DESCRIPCION_TIP ?>
	</div>
</li>	

</ul>
</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->



</div>