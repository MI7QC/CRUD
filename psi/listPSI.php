<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-full-width">
        <!-- <a href=formulairePSI.php?id=0><img src='../images/woman-man-80.png'></a> -->
    </div>
    <div class="container-full-width">
        <?php if (isset($_GET['message'])) {
        ?>
            <span class="message"><?php echo $_GET['message']; ?></span>
        <?php
        } ?>
    </div>

    <?php
    include 'mesFunctionsSQL.php';
    include 'afficherUser.php';

    $headers = getHeaderTable();
    $psi = getAllPSI();
    afficherTableau($psi, $headers);
    ?>


</body>

</html>