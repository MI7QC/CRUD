<?php
    include 'mesFunctionsSQL.php';
    include 'afficherUser.php';

    $recherche = isset($_POST['recherche']) ? trim($_POST['recherche']) : "";
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="../styles/mainPage.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--  affichage du message  succes si requete sql a passé-->
    <div class="container-full-width">
        <?php if (isset($_GET['message'])) { ?>
            <span class="message"><?php echo $_GET['message']; ?></span>
        <?php } ?>
    </div>

    <?php
    //menu navuser
    navuser();
    //recupere et affiche le header du tableau
    $headers = getHeaderTable();
    $users = getAllUsers($recherche);
    afficherTableau($users, $headers);
    ?>
</body>
</html>