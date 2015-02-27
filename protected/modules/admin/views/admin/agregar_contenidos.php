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
		<h1><i class='fa fa-table'></i>Agregar Nuevo Contenido</i></b></h1>      	
	</div>

	<form action="<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_contenidos/" method="post">
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
						<label>Titulo</label>
						<input type="text" required name="titulo" class="form-control" >
						<br>
						<label>Descripción (Opcional)</label>
						<textarea name="descripcion" class="summernote"></textarea>
						<br>
						<label>Contenido</label>
						<textarea name="contenido" class="summernote"></textarea>
						<br>
						<input type="submit" value="Agregar Contenido" class="btn btn-default">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#agregar_contenidos").addClass('active');
</script>