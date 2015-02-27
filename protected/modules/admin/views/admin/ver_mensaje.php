<div class="page-heading">
	<h1><i class="fa fa-magic"></i> Mensajes</h1>
	<h3>Estos mensajes llegan de la sección contáctenos de la página</h3>
</div>

<?php if(isset($mensaje_success)):?>
	<div class="bs-callout bs-callout-success">
		<h4>Operación exitosa</h4>
		<p><?php echo $mensaje_success ?></p>
	</div>
<?php endif; ?>

<?php if(isset($mensaje_err)):?>
	<div class="bs-callout bs-callout-danger">
		<h4>Lo sentimos</h4>
		<p><?php echo $mensaje_err ?></p>
	</div>
<?php endif; ?>

<div class="widget">
	<div class="col-sm-12">
		<!-- Begin read message -->
		<!-- Message -->
		<div class="row">
			<div class="col-sm-8">
				<h3 class="semibold"><?php echo $model->NOMBRES ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="mail-sender-details">
					<img src="<?php echo Yii::app()->request->baseUrl ?>/images/users/2.jpg" class="img-circle sender-photo"> <small><b><?php echo $model->NOMBRES ?></b> <span class="text-muted"><?php echo $model->CORREO ?></span><br><span class="text-muted"><?php echo $model->FECHA ?></span></small>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-12 mail-body">
				<hr>
				<?php echo $model->MENSAJE ?>
				<br>
				<br>
			</div>
		</div>
	</div>
</div>