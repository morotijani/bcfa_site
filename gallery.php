<?php 

    require_once ('connection/conn.php');
    $headerTitle = 'Gallery - B.C.F.A';
    include ("include/header.php");

    $sql = "
        SELECT * FROM bcfa_gallery 
        ORDER BY id DESC
    ";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $images = $statement->fetchAll();
?>

    <!-- MAIN -->
    <main id="content" role="main">
        <div class="container content-space-t-3 content-space-t-lg-5">
            <div class="w-lg-75 text-center mx-lg-auto">
                <div class="mb-5 mb-md-10">
                    <h1 class="display-4">Gallery</h1>
                    <p class="lead">Helping to create awareness on Bitcoin and other crypto currencies in Ghana and Africa to be precise.</p>
                </div>
            </div>

            <div class="row" data-masonry='{"percentPosition": true }'>
                <?php foreach ($images as $image): ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a class="media-viewer" href="<?= PROOT . $image['gallery_media']; ?>" data-fslightbox="gallery">
                            <img class="img-fluid rounded" src="<?= PROOT . $image['gallery_media']; ?>" style="width: 100%; height: 200px; object-fit: cover;" alt="<?= PROOT . $image['gallery_date_added']; ?>">

                            <span class="media-viewer-container">
                                <span class="media-viewer-icon bg-secondary">
                                    <i class="bi-plus media-viewer-icon-inner"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

<?php include ('include/footer.php'); ?>
    