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
		<h1><i class='fa fa-info-circle'></i> Información de Contacto</h1>
		<h3>A continuación puedes editar los datos de contacto</h3>            	
	</div>
	<form action="<?php echo Yii::app()->request->baseUrl; ?>/admin/contacto/" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<div class="widget-header">
						<h2><strong>Editar Información de Contacto</strong></h2>
					</div>
					<div class="widget-content padding">
						<div class="form-group">
							<label for="direccion">Dirección</label>
							<input type="text" value="<?php echo $contacto->DIRECCION ?>"  name="direccion" class="form-control">
						</div>
						<div class="form-group">
							<label for="telefono">Teléfonos</label>
							<input type="text" value="<?php echo $contacto->TELEFONOS ?>" name="telefono" class="form-control">
						</div>
						<div class="form-group">
							<label for="correo">Correo</label>
							<input type="text" value="<?php echo $contacto->CORREO ?>" name="correo" class="form-control">
						</div>
						<div class="form-group">
							<label for="horario">Horario</label>
							<input type="text" value="<?php echo $contacto->HORARIO ?>" name="horario" class="form-control">
						</div>
						<div class="form-group">
							<label for="facebook">Facebook</label>
							<input type="text" placeholder="Ejemplo: https://www.facebook.com/dinamov" value="<?php echo $contacto->FACEBOOK ?>" name="facebook" class="form-control">
						</div>
						<div class="form-group">
							<label for="twitter">Twitter</label>
							<input type="text" placeholder="Ejemplo https://twitter.com/dinamov" value="<?php echo $contacto->TWITTER ?>" name="twitter" class="form-control">
						</div>
						<input type="submit" value="Actualizar información" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#contacto").addClass('active');
</script>