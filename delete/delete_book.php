<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Про Technolord";
    require_once "../blocks/head.php" ?>
</head>

<body>

<?php 
    require_once "../blocks/header.php";
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">


</body>