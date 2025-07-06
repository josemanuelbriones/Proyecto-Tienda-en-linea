<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/43c1829cd1.js" crossorigin="anonymous"></script>

<?php
    if ($vista == "404") {
    ?>
    <link rel="stylesheet" href="<?php echo APP_URL?>views/css/notFound.css">
<?php
    }else {
        
?>
    <link rel="stylesheet" href="<?php echo APP_URL?>views/css/style.css">
<?php
    
    }
?>


