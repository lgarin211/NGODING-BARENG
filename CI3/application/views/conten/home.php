      <div class="card shadow mb-4">
      	<div class="card-header py-3">
      		<h6 class="m-0 font-weight-bold text-primary">ITEM TABELS</h6>
      		<a class="btn btn-primary" href="<?php echo base_url('welcome/create'); ?>">New Produk</a>
      	</div>
      	<div class="card-body">
      		<div class="card shadow mb-4">
      			<div class="card-header py-3">
      				<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      			</div>
      			<div class="card-body">
      				<div class="table-responsive">
      					<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
      						<div class="row">
      							<div class="col-sm-12 col-md-6">
      								<div class="dataTables_length" id="dataTable_length">
      								</div>
      							</div>
      							<div class="col-sm-12 col-md-6">
      								<div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
      							</div>
      						</div>
      						<div class="row">
      							<div class="col-sm-12">
      								<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
      									<thead>
      										<tr role="row">
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 233.719px;">NO</th>
      											<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 139.819px;">NAMA PRODUK</th>
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 233.719px;">HARGA</th>
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100.861px;">PENJUAL</th>
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38.9272px;">ASAL</th>
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38.9272px;">IMG</th>
      											<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 38.9272px;">ACTION</th>
      										</tr>
      									</thead>
      									<tfoot>
      										<tr>
      											<th rowspan="1" colspan="1">NO</th>
      											<th rowspan="1" colspan="1">NAMA PRODUK</th>
      											<th rowspan="1" colspan="1">HARGA</th>
      											<th rowspan="1" colspan="1">PENJUAL</th>
      											<th rowspan="1" colspan="1">ASAL</th>
      											<th rowspan="1" colspan="1">IMG</th>
      											<th rowspan="1" colspan="1">ACTION</th>
      										</tr>
      									</tfoot>
      									<tbody>
      										<?php foreach ($items as $key => $itm) : ?>

      											<tr role="row" class="odd text-center">
      												<th><?= ++$key; ?></th>
      												<th><?= $itm->PRODUK; ?></th>
      												<th>Rp.<?= $itm->HARGA; ?></th>
      												<th><?= $itm->NAMA; ?></th>
      												<th><?= $itm->ASAL; ?></th>
      												<th><img src="<?= $itm->IMG_link; ?>" alt="" width="50px"></th>
      												<th>ACTION</th>
      											</tr>
      										<?php endforeach; ?>
      									</tbody>
      								</table>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
