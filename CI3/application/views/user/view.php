		<div class="mx-auto mr-1 pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		</div>
		<div class="container mx-auto jumbotron text-center">
			<!-- <div class="row text-center mx-auto"> -->
			<?php foreach ($items as $key => $itm) : ?>
				<div class="card mt-1 md-1">
					<div class="card shadow-sm">
						<div class="card-header">
							<h4 class="my-0 font-weight-normal"><?= $itm->PRODUK; ?></h4>
							<div class="row">
								<div class="card col-md-7">
									<div class="card-body">
										<h3 class="card-title pricing-card-title"><small class="text-muted">Rp.</small><?= $itm->HARGA; ?></h3>
										<ul class="list-unstyled mt-3 mb-4">
											<li>ASAL : <?= $itm->ASAL; ?></li>
											<li>PENJUAL : <?= $itm->NAMA; ?></li>
											<li>STOKP : <?= $itm->id; ?></li>
										</ul>
										<div class="card-body">
											<p>DEKSRIPSI HERE</p>
										</div>
									</div>
								</div>
								<div class="card card-body col-md-5">
									<img width="400px" class="mx-auto img-fluid img-thumbnail rounded" height="350px" src="<?= $itm->IMG_link; ?>" alt="">
								</div>
								<hr>
							</div>
						</div>
						<a href="<?= base_url('user/buy') ?>?id=<?= $itm->id; ?>" class="btn btn-lg btn-block btn-primary">Get started</a>
					</div>
					<br>
				<?php endforeach; ?>
				<!-- </div> -->
				</div>
