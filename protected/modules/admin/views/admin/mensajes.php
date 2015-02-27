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

<div class="mail-list">
	<div class="clearfix"></div>
	
	<!-- Toolbar message -->
	<div class="data-table-toolbar">
		<div class="row">
			<div class="col-sm-8">
				<h4>Últimos</h4>
			</div>
			<div class="col-sm-4 hidden-xs">
				<div class="pull-right">
					<span class="paging-status"><!--20 of 250--></span>
					<div class="btn-group">
					  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
					  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div><!-- End div .col-sm-3 -->
		</div><!-- End div .row -->
	</div><!-- End div .data-table-toolbar -->
	<!-- End toolbar message -->
	
		


	<!-- Message table -->
	<div class="table-responsive">
		<table class="table table-hover table-message">
			<tbody>
				<?php foreach ($mensajes as $mensaje): ?>
				<tr >
					<td style="width: 20px"><div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="rows-check" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div></td>
					<td style="width: 20px;"><a href="javascript:;"><i class="icon-star-<?php if($mensaje->ESTADO!=0){echo 'empty-';} ?>1 warning"></i></a></td>
					<td><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/ver_mensaje/<?php echo $mensaje->ID_MENSAJE ?>" ><?php echo $mensaje->NOMBRES ?></a></td>
					<td><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/ver_mensaje/<?php echo $mensaje->ID_MENSAJE ?>"><?php echo substr($mensaje->MENSAJE,0,45)."..." ?></a></td>
					<td><?php echo $mensaje->FECHA ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div><!-- End div .table-responsive -->
	<!-- End message table -->
	
	<!-- Footer message toolbar -->
	<div class="data-table-toolbar-footer">
		<div class="pull-right">
			<span class="paging-status"><!--20 of 250--></span>
			<div class="btn-group">
			  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
			  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
			</div><!-- End div .btn-group -->
		</div><!-- End div .pull-right -->
	</div><!-- End div .data-table-toolbar -->
	<!-- End Footer message toolbar -->
	</div>