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
		<h1><i class='fa fa-cogs'></i> Contenido <b><i><?php echo $como_trabajamos->TITULO ?></i></b></h1>
		<h3>A continuación puedes editar el contenido</h3>            	</div>
	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
	<form action="<?php echo Yii::app()->request->baseUrl; ?>/admin/admin/como_trabajamos_editar/<?php echo $como_trabajamos->ID ?>" method="post">
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
						<input type="hidden" name="id" value="<?php echo $como_trabajamos->ID ?>">
						<label>Titulo</label>
						<input type="text" name="titulo" class="form-control" value="<?php echo $como_trabajamos->TITULO ?>">
						<br>
						<label>Descripción (Opcional)</label>
						<textarea name="descripcion" class="summernote">
							<?php echo $como_trabajamos->DESCRIPCION ?>
						</textarea>
						<br>
						<label>Quiénes Somos</label>
						<textarea name="contenido" class="summernote">
							<?php echo $como_trabajamos->CONTENIDO ?>
						</textarea>
						<br>
						<input type="submit" value="Actualizar Información" class="btn btn-default">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#como_trabajamos").addClass('active');
</script>