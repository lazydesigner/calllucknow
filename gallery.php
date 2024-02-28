<?php include './routes.php';
include './profiles-card.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Title of page</title>
    <meta name="description" content="meta description">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Title of page" />
    <meta property="og:description" content="meta description" />
    <meta property="og:url" content="<?= get_url() ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Title of page" />
    <meta name="twitter:description" content="meta description" />
    <link rel="canonical" href="<?= get_url() ?>" />
    <?= $pages_css ?>

    <style>
        .gallery-image {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2%;
        }

        .images-section {
            margin: 1% 0;
            width: 30%;
            height: auto;
            border: 1px solid var(--NavbarColor);
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>

<body>
    <?php include './header.php' ?>
    <div class="content-container">
        <div class="page-container">
            <div class="main-content">
                <h1 class="main-heading">Gallery</h1>

                <p>Hot Enjoyable and High-Class Call Girls Escort Services available <strong>24/7</strong> in Lucknow.<strong> Callgirlsinlucknow.in</strong>&nbsp;Services provides the Finest Escort services in Lucknow and surrounding areas. It also confides in providing safe and high-quality services at reasonable rates.</p>

                <p><strong><a href="https://callgirlsinlucknow.in/">Callgirlsinlucknow.in</a></strong>&nbsp;Escort Services is one of the leading call girl companies in Lucknow, with a large network at all prominent locations in Lucknow. &nbsp;Our services extend from North to South and from East to West of Lucknow. We are the client&rsquo;s best rates for escort agency over the past several years and their reviews are proof of that.</p>


                <div class="gallery-image">
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-1-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-2-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-2.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download-3.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/download.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/hot-call-girls-in-dubai-971561616995-indian-call-girls-in-dubai.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-1-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-2-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-2.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-4-1.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-4.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-5.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-6.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images-7.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/images.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                    <div class="images-section">
                        <img src="<?= $cdn_url ?>gallery/indian-call-girls-in-dubai-971561616995-hot-dubai-call-girls.jpg" width="100%" loading="lazy" height="100%" alt="">
                    </div>
                </div>

            </div>
            <div class="side-content">
                <?php include './side-page-content.php'; ?>
            </div>
        </div>


        <?php include './footer.php' ?>
    </div>
</body>

</html>