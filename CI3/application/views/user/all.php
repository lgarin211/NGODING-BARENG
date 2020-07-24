<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.0.1">
	<title>Pricing example · Bootstrap</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

	<!-- Bootstrap core CSS -->
	<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="pricing.css" rel="stylesheet">
</head>

<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
		<a class="btn btn-outline-link" href="<?= base_url('welcome'); ?>">login</a>
		<a class="btn btn-outline-primary" href="#">Sign up</a>
	</div>

	<div class="mx-auto mr-1 pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<?php echo $this->session->flashdata('succes'); ?>
	</div>
	<div class="container mx-auto">
		<div class="row text-center mx-auto">

			<?php foreach ($items as $key => $itm) : ?>
				<div class="card mt-1  md-1">

					<div class="card shadow-sm">
						<div class="card-header">
							<h4 class="my-0 font-weight-normal"><?= $itm->PRODUK; ?></h4>
						</div>
						<div class="card-body">
							<h3 class="card-title pricing-card-title"><small class="text-muted">Rp.</small><?= $itm->HARGA; ?></h3>
							<ul class="list-unstyled mt-3 mb-4">
								<li>ASAL:<?= $itm->ASAL; ?></li>
								<li>PENJUAL:<?= $itm->NAMA; ?></li>
								<li>STOKP:<?= $itm->id; ?></li>
							</ul>
							<div class="container ml-9">
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


	<footer class="pt-4 my-md-5 pt-md-5 border-top">
		<div class="row">
			<div class="col-12 col-md">
				<img class="mb-2" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
				<small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
			</div>
	</footer>
	</div>
</body>

</html>
