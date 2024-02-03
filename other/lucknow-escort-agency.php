<?php include '../routes.php';
include '../profiles-card.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Best Lucknow Escort Agency | Raman Escort Agency</title>
    <meta name="description" content="meta description">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Title of page" />
    <meta property="og:description" content="meta description" />
    <meta property="og:url" content="<?= get_url() ?>agonda-escorts/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Title of page" />
    <meta name="twitter:description" content="meta description" />
    <link rel="canonical" href="<?= get_url() ?>" />
    <?=$pages_css ?>
    <style>
        table{
            width: 100%;
            height: auto;
            border-spacing: 0;
        }
        table td{
            border: 1px solid black;
            padding: 1%;
        }
    </style>
</head>

<body>
    <?php include '../header.php' ?>
    <div class="content-container">
        <div class="page-container">
            <div class="main-content">
              
            </div>
            <div class="side-content">
                <?php include '../side-page-content.php'; ?>
            </div>
        </div>


        <?php include '../footer.php' ?>
    </div>
</body>

</html>