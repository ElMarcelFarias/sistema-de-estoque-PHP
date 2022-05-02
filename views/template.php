<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
	</head>
	<body>
		<?php if(isset($viewData['menu'])): ?>
			<div class="header">
				<nav>
					<ul>
					<?php foreach($viewData['menu'] as $url => $menutitle): ?>
						<li><a href="<?php echo $url;?>"><?php echo $menutitle; ?></a></li>
					<?php endforeach;?>
					</ul>
				</nav>
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