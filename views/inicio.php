<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo APP_URL?>views/assets/img/logos/favicon.ico" type="image/x-icon">
    
    <title><?php echo APP_NAME?></title>
    <?php 
           $peticionAjax = false;
        require_once "./controllers/viewController.php";
        $viewController = new viewController();
        $vista = $viewController->getViewController();
        
    
    
        ?>
        
    <?php include "./views/inc/link.php"; ?>

</head>
<body id="fondo">
        <?php
		if ($vista == "login" || $vista == "404") {
			require_once "./views/container/" . $vista . "-view.php";
			
		}else{
            ?>
            <div>
        <?php
            include "./views/inc/navBar.php"; 
            ?>
            </div>
            <div>
            <?php
            include "$vista";
            include "./views/inc/footer.php"; 
        }
        ?>
            </div>
    
</body>
<?php include "./views/inc/script.php"; ?>
</html>