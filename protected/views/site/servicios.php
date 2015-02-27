<script type="text/javascript">
	$("#servicios").addClass("active");
</script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ihover.css"/>
<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

	<div class="pi-section-w pi-section-white pi-border-top">
		<div class="pi-section pi-padding-bottom-20">
			<h4 class=" pi-uppercase pi-has-bg pi-margin-bottom-30">
				<a href="#" class="pi-link-dark">SERVICIOS</a>
			</h4>
		</div>
	</div>
	
	

	<?php $alternar=0 ?>


	<?php foreach ($servicios as $s): ?>
	
	<?php if ($alternar%2==0): ?>
		<div class="pi-section-w pi-section-base pi-section-parallax" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/cielo.jpg);">
			<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
			<div class="pi-section pi-padding-top-100 pi-padding-bottom-80 pi-text-center" style="height:100px">
			</div>
		</div>
		<div class="fondo_gris">
		<div class="pi-section-w pi-section-white pi-border-top" style="background:#ededed">
	<?php else: ?>
		<div class="pi-section-w pi-section-base pi-section-parallax" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/panel.jpg);">
			<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
			<div class="pi-section pi-padding-top-100 pi-padding-bottom-80 pi-text-center" style="height:100px">
			</div>
		</div>
		<div class="fondo_gris">
		<div class="pi-section-w pi-section-white pi-border-top" style="background:#f7f7f7">
	<?php endif; $alternar++;?>
	
	
			<div class="pi-section pi-padding-bottom-20">
				<div class="pi-row">
					<div class="pi-col-sm-3 ">
						<br>
						<h4 class=" pi-uppercase border_bootom_green">
							<?php echo $s->nombre_servicio; ?>
						</h4>
						<h4 class="titulo_verde" style="color: #bdc530;">
							<?php echo $s->subtitulo_servicio; ?>
						</h4>
						<?php echo $s->descripcion_servicio; ?>
						<br>
						<button class="btn btn-degradado" data-activo="0" data-servicio="servicio-<?php echo $s->id_servicio ?>">Ver más</button>
						<br>
					</div>
					<div class="pi-col-sm-9 centrado">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $s->imagen_servicio ?>" alt="s">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="servicio-<?php echo $s->id_servicio ?>" class="invisible">
		<!--Inicio-->
			<div class="pi-section-w pi-section-white pi-border-top">
			<div class="pi-section pi-padding-bottom-20">
				<div class="pi-row">
					<div class="pi-col-sm-12 ">
						<?php echo $s->caracteristicas; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="pi-row banner-gris" style="padding-top: 15px;padding-left: 45px;">
			<div class="pi-col-md-1 margen_desaparecer"></div>
			<div class="pi-col-md-4">
				<span class="titulo-grande">APLICACIONES</span>
			</div>
			<div class="pi-col-md-6" style="color:#666e70;margin-top:7px">
				<?php echo $s->aplicaciones; ?>
				<br><br>
			</div>
		</div>

		
		<div class="pi-section-w pi-section-white pi-border-top">
			<div class="pi-section pi-padding-bottom-20">
				<?php $contador=1; ?>
				<div class="pi-row">
					<div class="pi-col-md-6">
						<div class="pi-row centrado">

				<?php foreach ($aplicaciones as $a): ?>
					<?php if ($a->id_servicio==$s->id_servicio): ?>
							<div class="pi-col-xs-4 centrado" id="ventana_desc_<?php echo $s->id_servicio.''.$a->id_aplicacion ?>_circle">
								<div class="ih-item circle effect17">
									<a class="link_servicio" data-info="ventana_desc_<?php echo $s->id_servicio.''.$a->id_aplicacion ?>">
										<div class="img">
								        	<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $a->imagen_aplicacion ?>" alt="img">
								        </div>
										<div class="info">
								          <h3><?php echo $a->nombre_aplicacion ?></h3>
								        </div>
								        <div class="info is_selected_circle" style="
											  display:none;
								        	  opacity: 1;
											  -webkit-transform: scale(1);
											  -moz-transform: scale(1);
											  -ms-transform: scale(1);
											  -o-transform: scale(1);
											  transform: scale(1);">
								          <h3><?php echo $a->nombre_aplicacion ?></h3>
								        </div>
									</a><br>
								</div><br>
							</div>
						<?php if ($contador%3==0): ?>
							</div>
							</div>
							<div class="pi-col-md-6">
							<div class="pi-row centrado">
						<?php endif ?>
						<?php if ($contador%6==0): ?>
							</div>
							<div class="pi-row">
						<?php endif ?>
						<?php $contador++; ?>
					<?php endif ?>
				<?php endforeach ?>

				<?php if ($contador%3!=0): ?>
					</div>
					</div>
				<?php endif ?>
				<?php if ($contador%6!=0): ?>
					</div>
				<?php endif ?>
				
				<br>
				
				<?php foreach ($aplicaciones as $a): ?>
					<?php if ($a->id_servicio==$s->id_servicio): ?>
						<div class="pi-row serv_info" id="ventana_desc_<?php echo $s->id_servicio.''.$a->id_aplicacion ?>">
							<div class="pi-col-sm-1"></div>
							<div class="pi-col-sm-10 contenido_servicio" style="padding: 20px 60px;">
								<h4 class="titulo_verde" style="color: #bdc530;text-transform:uppercase">
									<?php echo $a->nombre_aplicacion ?>
								</h4>
								<hr class="gris">
								<?php echo $a->caracteristicas_aplicacion ?>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
					
				
			</div>
		</div>
		<!--Fin-->
	</div>
	

	<?php endforeach; ?>
	
	



<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>

<script type="text/javascript">
	function ocultar_todo () {
		$(".invisible").fadeOut();
		$(".btn-degradado").html("Ver más");
	}

	$(".btn-degradado").on('click', function(event) {
		ocultar_todo();
		var activo= $(this).attr('data-activo');
		if(activo=="0"){
			$("#"+$(this).attr('data-servicio')).fadeIn("slow");
			$(this).html("Ver menos");
			$(".btn-degradado").attr('data-activo', '0');
			$(this).attr('data-activo','1');
		}else{
			$(this).attr('data-activo','0');
		}
	});

	//Lista coloreada con aspecto degradado
	$(".invisible ul").each(function(index, el) {
		var color_inicial=1281378;
		$(this).children('li').each(function(index, el) {
			$(this).css('color', '#'+Number(color_inicial).toString(16));
			var texto= $(this).html();
			$(this).html("<span>"+texto+"</span>");
			color_inicial=color_inicial+1181179;
		});
	});

	function normalizar_links () {
		$(".link_servicio").each(function(index, el) {
			$(this).children('.empresas').css('background-image', 'url(../img/iconos/icono-'+(index+1)+'.png)');
		});
	}

	$(".link_servicio").on('click', function(event) {
		$(".serv_info").fadeOut();
		$(".link_servicio").each(function(index, el) {
			$(this).children('.img').removeClass('item-selected-custom');
			$(this).children('.is_selected_circle').css('display', 'none');
		});
		//normalizar_links();
		$(this).children('.img').addClass('item-selected-custom');
		$(this).children('.is_selected_circle').css('display', 'block');
		$("#"+$(this).attr('data-info')).fadeIn();	
	});

	<?php if (isset($app_seleccionada) && isset($servicio_seleccionado)): ?>
		ocultar_todo();
		$(".serv_info").fadeOut();
		$("#ventana_desc_<?php echo $servicio_seleccionado.''.$app_seleccionada ?>").fadeIn();
		$("#servicio-<?php echo $servicio_seleccionado ?>").fadeIn("slow");
		$(".btn-degradado").attr('data-activo', '0');	
		$(".btn-degradado").each(function(index, el) {
			if ($(this).attr('data-servicio')=="servicio-<?php echo $servicio_seleccionado ?>") {
				$(this).html("Ver menos");
				$(this).attr('data-activo','1');
			};
		});

		$("#ventana_desc_<?php echo $servicio_seleccionado.''.$app_seleccionada ?>_circle").children('div').children('a').children('.img').addClass('item-selected-custom');
		$("#ventana_desc_<?php echo $servicio_seleccionado.''.$app_seleccionada ?>_circle").children('div').children('a').children('.is_selected_circle').css('display', 'block');
		$(document).ready(function() {
			$("body").scrollTo("#ventana_desc_<?php echo $servicio_seleccionado.''.$app_seleccionada ?>_circle",{duration:2000});
		});
	<?php endif ?>
</script>

