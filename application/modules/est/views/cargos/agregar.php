<div class="panel panel-white">
	<div class="panel-heading">
		<h4 class="panel-title">Agregar Cargo</h4>
		<div class="panel-tools">										
			<div class="dropdown">
			<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
				<i class="fa fa-cog"></i>
			</a>
			<ul class="dropdown-menu dropdown-light pull-right" role="menu">
				<li>
					<a class="panel-collapse collapses" href="table_basic.html#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
				</li>
				<li>
					<a class="panel-refresh" href="table_basic.html#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
				</li>
				<li>
					<a class="panel-config" href="table_basic.html#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
				</li>
				<li>
					<a class="panel-expand" href="table_basic.html#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
				</li>										
			</ul>
			</div>
			<a class="btn btn-xs btn-link panel-close" href="table_basic.html#"> <i class="fa fa-times"></i> </a>
		</div>
	</div>
	<div class="panel-body">	
		<form id="form_mandante" action=""  class="form-horizontal" method="post">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="form-field-1">
					Nombre Cargo:
				</label>
				<div class="col-sm-9">
					<input type="text" name="nombre" value="<?php echo @$texto_anterior['nombre'] ?>" id="n_p" size="39" class="form-control">
				</div>
			</div>
			<!-- .field -->
			<div class="form-group">
				<div class="col-sm-2" ></div>
				<div class="col-sm-9">
					<button type="submit" class="btn btn-primary">
						Guardar
					</button>
				</div>
			</div>
		</form>
	</div>
</div>