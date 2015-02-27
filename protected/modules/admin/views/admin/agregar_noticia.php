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
		<h1><i class='fa fa-bullhorn'></i> Agregar Noticia</h1>
		<h3>A continuación puedes agregar una Noticia</h3>            	</div>
	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
	<form id="form_servicio" action="<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_noticias/" enctype="multipart/form-data" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<div class="widget-header">
						<h2><strong>Título</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<input type="text" name="titulo" required class="form-control">
						<br>
					</div>
				</div>

				<div class="widget">
					<div class="widget-header">
						<h2><strong>Categoría</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<select name="categoria" id="categorias" class="form-control">
							<option value="">-- Seleccione una categoría --</option>
							<?php foreach ($categorias as $c): ?>
								<option value="<?php echo $c->id ?>"><?php echo $c->nombre ?></option>
							<?php endforeach ?>
							<option value="agregar">-- 
								Agregar Nueva
	                         --</option>
						</select>
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
								Carga una imagen
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group" style="text-align:center">
									<input onchange="cargarImagen()" required name="file" type="file" class="btn btn-primary" title="Cargar Imagen">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="widget">
					<div class="widget-header">
						<h2><strong>Contenido</strong></h2>
						<div class="additional-btn">
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
						<textarea name="contenido" class="summernote"></textarea>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<div class="widget-header" style="text-align:center">
						<h2><strong>Almacenar Noticia</strong></h2>
					</div>
					<div class="widget-content padding" style="text-align:center">
						<input type="submit" class="btn btn-primary" value="Almacenar y Publicar Noticia">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Nueva categoría</h4>
      </div>
      <div class="modal-body">
        	<div class="row">
        		<div class="col-sm-12">
        			<label>Nombre de la Categoría</label>
					<br>
					<input id="nombre_nueva_categoria" type="text" class="form-control">
        		</div>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn_almacenar" data-dismiss="modal" class="btn btn-primary">Almacenar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	$("#agregar_noticias").addClass('active');
	$("#categorias").on('change', function(event) {
		if($(this).val()=='agregar'){
			$("#myModal").modal("show");
		}
		
	});
	$("#btn_almacenar").on('click', function(event) {
		if ($("#nombre_nueva_categoria").val()=="") {
			autohidenotify('error');	
		}else{
			$.ajax({
				url: '<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_categoria/',
				type: 'get',
				data: {'nombre': $("#nombre_nueva_categoria").val()},
				dataType: 'json',
				success: function (data) {
					console.log(data);
					autohidenotify('success');	
					$("#categorias").val("");
					var html='';
					var html= '<option value="">-- Seleccione categoría --</option>';
					for(var i=0; i<data.length ; i++){
						html+='<option value="'+data[i]['id']+'">'+data[i]['nombre']+'</option>';
					}
					html+='<option value="agregar">-- Agregar Nueva --</option>';
					$("#categorias").html(html);
				},
				error:function (data) {
					autohidenotify('error');	
				}
			});
		};
	});
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