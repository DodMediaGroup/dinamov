<div class="page-heading">
	<h1><i class="fa fa-magic"></i> Cambia tu Contraseña</h1>
	<h3>Elige una nueva contraseña para tu cuenta</h3>
</div>

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

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'password-form-passwo-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
)); ?>

	<div class="widget">
		<div class="widget-header">
			<h2>Cambiar contraseña</h2>
		</div>	
		<div class="widget-content padding">
			<label>Contraseña actual</label>
			<?php echo $form->passwordField($model,'pass_actual',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'pass_actual'); ?>
			<label>Nueva contraseña</label>
			<?php echo $form->passwordField($model,'nuevo_pass_1',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'nuevo_pass_1'); ?>
			<label>Repita su nueva contraseña</label>
			<?php echo $form->passwordField($model,'nuevo_pass_2',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'nuevo_pass_2'); ?>
			<br><br>
			<input type="submit" type="submit" value="Cambiar contraseña" class="btn btn-primary btn-full">
		</div>
	</div>

<?php $this->endWidget(); ?>