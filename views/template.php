<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/home.css">
		<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<?php if(isset($viewData['menu'])): ?>
		<div class="container-fluid headerbg">
			<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
				<a href="<?php echo BASE_URL;?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<img src="<?php echo BASE_URL;?>assets/images/logo.png" width="40" height="32">
				<span class="mx-2 fs-4">Controle de Estoque</span>
				</a>

				<ul class="nav nav-pills">
				<?php foreach($viewData['menu'] as $url => $menutitle): ?>
					<li class="nav-item"><a href="<?php echo $url;?>" class="nav-link link-dark fw-bold"><?php echo $menutitle; ?></a></li>
				<?php endforeach;?>
				</ul>

			</header>
		</div>
		<?php endif;?>
		<div class="container">
			<?php
			$this->loadViewInTemplate($viewName, $viewData);
			?>
		</div>


	<!--máscara do jquery-->
	<script src="<?php echo BASE_URL;?>assets/js/jquery.mask.js"></script>
	<script src="<?php echo BASE_URL;?>assets/js/script.js"></script>
	</body>
</html>