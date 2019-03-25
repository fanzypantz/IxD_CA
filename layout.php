<?php require_once 'ti.php' ?>
<?php include("includes/_config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Community Science Museum - <?php print $PAGE_TITLE;?></title>
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="museum community science exhibitions robotics AI biology history cosmology" />
        <meta name="description" content="Come see your local community science museum for all we have to offer, we have plenty of exhibitions about fantastic subjects like cosmlogy, biology and robotics" />
        <link rel="stylesheet" href="https://use.typekit.net/gmx3mnm.css">
        <link rel="stylesheet" href="css/base.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <?php startblock('head') ?>

        <?php endblock() ?>

    </head>
    <body>
       



        <?php startblock('content') ?>

        <?php endblock() ?>

        <footer>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php" title="Home">Home</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Exhibitions") {?>active<?php }?>" href="exhibitions.php" title="Exhibition spaces">Exhibitions</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Involvement") {?>active<?php }?>" href="involvement.php" title="Get involved with the museum">Get Involved</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php" title="Contact Us">Contact Us</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Visit Us") {?>active<?php }?>" href="visit.php" title="Visit Us">Visit Us</a>
        </footer>

        <?php startblock('scripts') ?>

        <?php endblock() ?>

    </body>
</html>
