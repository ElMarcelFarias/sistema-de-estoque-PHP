
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/sweetalert2.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/sweetalert2.min.css">
    <title>Login</title>
</head>
<body> 
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="<?php echo BASE_URL;?>/assets/images/logo.png" alt="logo" width="120">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="text">Seu número</label>
									<input type="text" class="form-control" name="number" required autofocus>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password" >Sua senha</label>
									</div>
									<input type="password" class="form-control" name="password" required>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div> 

								<?php if(!empty($msgErrorLogin)): ?>
								<div class="mb-3">
                                    <div class="warning">
										<?php echo "Senha ou/e email incorretos!"?>
                                    </div>
								</div>
								<?php endif; ?>
							</form>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2021-2022 &mdash; Marcel Leite de Farias &lt;/&gt; 
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>




