<?php if (isset($mensaje_exito)): ?>
	<div class="alert alert-success">
        Felicidades!!! <a href="#" class="alert-link"><?php echo $mensaje_exito ?></a>.
    </div>
<?php endif ?>

<?php if (isset($mensaje_error)): ?>
	<div class="alert alert-danger">
        Atención!!! <a href="#" class="alert-link"><?php echo $mensaje_error ?></a>.
    </div>
<?php endif ?>
<div class="content">
	<div class="page-heading">
		<h1><i class='fa fa-sitemap'></i> Servicio <b><i><?php echo $servicio->nombre_servicio ?></i></b></h1>
		<h3>A continuación puedes editar el servicio</h3>            	</div>
	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
	<form id="form_servicio" action="<?php echo Yii::app()->request->baseUrl; ?>/admin/admin/editar_servicio/<?php echo $servicio->id_servicio ?>" enctype="multipart/form-data" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<div class="widget-header">
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<input type="hidden" name="id" value="<?php echo $servicio->id_servicio ?>">
						<label>Nombre</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo $servicio->nombre_servicio ?>">
						<br>
						<label>Subtitulo</label>
						<textarea name="subtitulo" class="summernote"><?php echo $servicio->subtitulo_servicio ?></textarea>
						<br>
					</div>
				</div>

				<div class="widget">
					<div class="widget-header">
						<h2><strong>Descripción</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<textarea name="descripcion" class="summernote"><?php echo $servicio->descripcion_servicio ?></textarea>
						<br>
					</div>
				</div>

				<div class="widget">
					<div class="widget-header">
						<h2><strong>Imágen</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<div class="row">
							<div class="col-md-12" id="respuesta" style="text-align:center">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php echo $servicio->imagen_servicio ?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group" style="text-align:center">
									<input onchange="cargarImagen()" name="file" type="file" class="btn btn-primary" title="Cargar Imagen">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="widget">
					<div class="widget-header">
						<h2><strong>Catacteristicas</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<textarea name="caracteristicas" class="summernote"><?php echo $servicio->caracteristicas ?></textarea>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<div class="widget-header" style="text-align:center">
						<h2><strong>Guardar Cambios y Actualizar Información</strong></h2>
					</div>
					<div class="widget-content padding" style="text-align:center">
						<input type="submit" class="btn btn-primary" value="Actualizar Este Servicio">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#servicios").addClass('active');

	function cargarImagen () {

		// var ruta_archivo= ($("#archivo").val()).split("\\");
		// var nombre_final="";

		// //Validador para mozila firefox
		// if(ruta_archivo.length==1){
		// 	nombre_final= ruta_archivo[0];
		// }else{
		// 	nombre_final= ruta_archivo[2];
		// }


		// // $("#Slide_IMAGEN_SLIDE").val(nombre_final);
		var	formData= new FormData($("#form_servicio")[0]);
			


		var barra_progreso='<p>Subiendo imagen, favor espere</p><div class="progress">';
			barra_progreso+='<div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">';
			barra_progreso+='<span class="sr-only">75% Complete</span>';
			barra_progreso+='</div>';
			barra_progreso+='</div>';

		$("#respuesta").html(barra_progreso);
		var ruta= "<?php echo Yii::app()->request->baseUrl;  ?>/admin/admin/subir_imagen";
		$.ajax({
			url: ruta,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function (datos) {
				$("#respuesta").html(datos);
			},
			error: function (datos) {
				$("#respuesta").html(datos);
			}
		});
	}
</script>