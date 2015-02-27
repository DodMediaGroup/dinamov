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
<form method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/admin/quienes_somos/">	
	<div class="row">
		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Quiénes Somos</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<label>Leyenda</label>
					<textarea name="leyenda" rows="3" style="resize:vertical" class="form-control"><?php echo $quienes_somos->LEYENDA ?>
					</textarea>
					<br>
					<label>Quiénes Somos</label>
					<textarea name="quienes_somos" class="summernote">
						<?php echo $quienes_somos->QUIENES_SOMOS ?>
					</textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Misión</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="widget-content padding">
						<textarea name="mision" class="summernote">
							<?php echo $quienes_somos->MISION ?>
						</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Visión</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="widget-content padding">
						<textarea name="vision" class="summernote">
							<?php echo $quienes_somos->VISION ?>
						</textarea>
					</div>
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
					<input type="submit" class="btn btn-primary" value="Actualizar Sección Quiénes Somos">
				</div>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$("#quienes_somos").addClass('active');
</script>