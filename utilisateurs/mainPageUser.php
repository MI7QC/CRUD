<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- lien creation utilisateur -->
    <div class="container-full-width">
        <a href=formulaireUser.php?id=0><img src='../images/woman-man-80.png'></a>
    </div>
    <!--  affichage du message -->
    <div class="container-full-width">
        <?php if (isset($_GET['message'])) { ?>
            <span class="message"><?php echo $_GET['message']; ?></span>
        <?php } ?>
    </div>

   
    <?php
    include 'mesFunctionsSQL.php';
    include 'afficherUser.php';

    $recherche = isset($_POST['recherche']) ? trim($_POST['recherche']) : "";

    
    ?>
    <form id="recherche" action="" method="post">
        <label>Utilisateur :</label>
        <input type="text" name="recherche" value="<?= $recherche ?>">
        <input type="submit" value="recherche"></input>
    </form>
    <?php
    $headers = getHeaderTable();
    $users = getAllUsers($recherche);
    afficherTableau($users, $headers);
    ?>



</body>

</html>