<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo BASE_URL; ?>/assets/css/login.css" rel="Stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="loginArea">

        <h2>Login</h2>
        
        <form method="POST">
        <input type="email" name="email" placeholder="email" />
        <input type="password" name="password" placeholder="senha" />
        <input type="submit" value="Acessar">

       <?php if(isset($error) &&  !empty($error)):?>
       <div class="warning"><?php echo $error;?></div>


       <?php endif;?>


        </form>


    </div>

</body>

</html>