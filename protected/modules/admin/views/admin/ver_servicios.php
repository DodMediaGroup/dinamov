<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
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
	<!-- Page Heading Start -->
	<div class="page-heading">
		<h1><i class='fa fa-sitemap'></i> Servicios</h1>
		<h3>Lista de servicios</h3>            	</div>
	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
	<div class="row">
		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content">
				<br>					
					<div class="table-responsive">
						<form class='form-horizontal' role='form'>
						<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th>Nombre</th>
						                <th>Descripción</th>
						                <th>Opciones</th>
						            </tr>
						        </thead>
						 
						        <tbody>
						        	<?php foreach ($servicios as $s): ?>
						        		<tr>
							                <td><?php echo $s->nombre_servicio ?></td>
							                <td><?php echo $s->subtitulo_servicio ?></td>
							                <td>
							                	<div class="btn-group btn-group-xs">
													<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/admin/editar_servicio/<?php echo $s->id_servicio ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Editar Servicio"><i class="fa fa-edit"></i></a>
													<a data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Eliminar Servicio"><i class="fa fa-close"></i></a>
												</div>
							                </td>
							            </tr>
						        	<?php endforeach ?>
						        </tbody>
						    </table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<script type="text/javascript">
	$("#ver_servicios").addClass('active');
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/pages/datatables.js"></script>