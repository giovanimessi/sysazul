<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=meu site, initial-scale=1.0">
    <title>Painel-<?php echo $viewData['company_name']; ?></title>
    <link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="Stylesheet">
</head>

<body>
    <div class="leftMenu">
       <div class="company_name">
       <?php echo $viewData['company_name']; ?>
       </div>
    </div>

    <div class="container">

        <div class="top">
        <div class="top_right"><a href="<?php echo BASE_URL.'login/logout'; ?>">Sair</a></div>
            <div class="top_right"><?php echo $viewData['user_email'];?></div>
           
        </div>


    </div>
    <!-- <h1>Este e o topo do meu site</h1>-->



</body>

</html>