<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-full-width">
        <a href=formulaireUser.php?id=0><img src='../images/woman-man-80.png'></a>
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