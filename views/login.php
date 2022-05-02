
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginarea">
        <form method="POST">
            Seu número:<br/>
            <input type="text" name="number"><br/><br/>

            Sua senha:<br/>
            <input type="password" name="password"><br/><br/>
            <input type="submit" value="Entrar">
        </form> 
    </div>
    <?php if(!empty($msg)): ?>
    <h2><?php echo$msg;?></h2>
    <?php endif; ?>
</body>
</html>


