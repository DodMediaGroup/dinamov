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
		<h1><i class='fa fa-book'></i> Blogs</h1>
		<h3>Lista de blogs</h3>            	</div>
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
						                <th>Titulo</th>
						                <th>Fecha de Publicación</th>
						                <th>Opciones</th>
						            </tr>
						        </thead>
						 
						        <tbody>
						        	<?php foreach ($blogs as $b): ?>
						        		<tr>
							                <td><?php echo $b->titulo ?></td>
							                <td>
							                	<?php $fecha_div= explode("-",$b->fecha) ?>
												<?php $meses = array('01' => 'ene','02' => 'feb','03' => 'mar','04' => 'abr','05' => 'may','06' => 'jun','07' => 'jul','08' => 'ago','09' => 'sep','10' => 'oct','11' => 'nov','12' => 'dic');?>
												<?php echo $meses[$fecha_div[1]]?> <?php echo $fecha_div[2]?>, <?php echo $fecha_div[0]?> 
							                </td>
							                <td>
							                	<div class="btn-group btn-group-xs">
													<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/admin/editar_blog/<?php echo $b->id ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Editar Blog"><i class="fa fa-edit"></i></a>
													<a data-toggle="tooltip"  onclick="eliminarContenido(<?php echo $b->id ?>,'<?php echo $b->titulo ?>')" title="" class="btn btn-default" data-original-title="Eliminar Blog"><i class="fa fa-close"></i></a>
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


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar contenido</h4>
      </div>
      <div class="modal-body">
        	<div class="row">
        		<div class="col-sm-12">
        			¿Está seguro que desea eliminar el blog <b><i><span id="nombre_cont_modal"></span></i></b>?
        		</div>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a id="btn_borrar_modal" href="" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$("#ver_blogs").addClass('active');

	function eliminarContenido (id,nombre) {
		$("#nombre_cont_modal").html(nombre);
		$("#btn_borrar_modal").attr('href', '<?php echo Yii::app()->request->baseUrl; ?>/admin/admin/eliminar_blog/'+id);
		$("#myModal").modal("show");
	}
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/pages/datatables.js"></script>