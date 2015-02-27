<body class="fixed-left login-page">		
	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-base.png" alt="Logo"></a></p>
			<div class="login-wrap animated flipInX">
				
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>
				<div class="login-block">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/dinamov-logo.png" class="img-circle not-logged-avatar">
					<form role="form" action="index.html">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<?php echo $form->textField($model,'username',array('class'=>'form-control text-input','placeholder'=>'Usuario')); ?>
						<?php echo $form->error($model,'username'); ?>
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<?php echo $form->passwordField($model,'password',array('class'=>'form-control text-input','placeholder'=>'Contraseña')); ?>
						<?php echo $form->error($model,'password'); ?>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
							<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-success btn-block')); ?>
							</div>
						</div>
					</form>
				</div>
				<?php $this->endWidget(); ?>
			</div>
			
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
</body>