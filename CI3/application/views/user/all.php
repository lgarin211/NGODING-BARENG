<!-- COMPONEN -->
<div class="mx-auto mr-1 pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<?php echo $this->session->flashdata('succes'); ?>
</div>
<div class="container mx-auto">
	<div class="row text-center mx-auto">

		<?php foreach ($items as $key => $itm) : ?>
			<div class=" col-md-3 mt-2">
				<div class="card shadow-sm">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal"><?= $itm->PRODUK; ?></h4>
					</div>
					<div class="card-body">
						<h3 class="card-title pricing-card-title">
							<small class="text-muted">Rp.</small><?= $itm->HARGA; ?></h3>
						<ul class="list-unstyled mt-3 mb-4">
							<li>ASAL : <?= $itm->ASAL ?></li>
							<li>
								<? $a = strlen($itm->NAMA);
								if ($a < 14) {
									echo $itm->NAMA;
								} else {
									echo '<small>' . $itm->NAMA . '</small>';
								} ?>
							</li>
							<li>STOK : <?= $itm->id; ?></li>
						</ul>
						<div class=" ml-9">
							<img width="200px" height="250px" src="<?= $itm->IMG_link; ?>" alt="">
						</div>
						<hr>
						<a href="<?= base_url('user/view') ?>?id=<?= $itm->id; ?>" class="btn btn-lg btn-block btn-primary">Get started</a>
					</div>
				</div>
			</div>
			<br>
		<?php endforeach; ?>
	</div>
</div>
<!-- ENDCOMPONEN -->
