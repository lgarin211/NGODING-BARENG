<body class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-4 order-md-2 mb-4">
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">PEMBELIAN TOTAL </span>
					<span class="badge badge-secondary badge-pill">1</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">Product name</h6>
							<small class="text-muted"><?= $items[0]->PRODUK; ?></small>
						</div>
						<span class="text-muted">Rp<?= $items[0]->HARGA; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between">
						<span>Total (RUPIAH)</span>
						<strong>Rp.<?= $items[0]->HARGA; ?></strong>
					</li>
				</ul>

			</div>
			<div class="col-md-8 order-md-1">
				<h4 class="mb-3">DATA PENGIRIMAN</h4>
				<form class="needs-validation" method="post" action="<?= base_url('user/upload'); ?>">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="firstName">NAMA DEPAN</label>
							<input type="text" class="form-control" id="firstName" name="namad" placeholder="" value="" required>
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="lastName">NAMA BELAKANG</label>
							<input type="text" class="form-control" id="lastName" name="b" placeholder="" value="" required>
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>
					</div>

					<div class="mb-3">
						<label for="email">Email <span class="text-muted">(Optional)</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
						<div class="invalid-feedback">
							Please enter a valid email address for shipping updates.
						</div>
					</div>

					<div class="mb-3">
						<label for="address">ALAMAT</label>
						<input type="text" class="form-control" id="address" name="alamat" placeholder="1234 Main St" required>
						<div class="invalid-feedback">
							Please enter your shipping address.
						</div>
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit">Continue</button>
					<input type="hidden" name="id_produk" value="<?= $items[0]->id; ?>">
					<input type="hidden" name="harga" value="<?= $items[0]->HARGA; ?>">
					<input type="hidden" name="asal" value="<?= $items[0]->ASAL; ?>">
				</form>
			</div>
		</div>
