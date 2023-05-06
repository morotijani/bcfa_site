<?php 

    require_once ('../connection/conn.php');

    $sql = "
        SELECT * FROM bcfa_gallery 
        ORDER BY id DESC
    ";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $images = $statement->fetchAll();

    if (isset($_GET['delete']) && !empty($_GET['delete'])) {
        // code..
        $id = sanitize((int)$_GET['delete']);
        $delete_image = unlink(BASEURL . $_GET['location']);

        if ($delete_image) {
            // code...
            $deleteQuery = "
                DELETE FROM bcfa_gallery 
                WHERE id = ?
            ";
            $statement = $conn->prepare($deleteQuery);
            $result = $statement->execute([$id]);
            if ($result) {
                // code...
                redirect(PROOT . 'admin/Gallery');
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Upload Images | Gallery . Admin</title>
</head>
<body>
    <header class="p-3 text-bg-dark bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?= PROOT; ?>admin/index" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="<?= PROOT; ?>assets/media/logo/bcfa-logo-sm.png" class="me-2" width="40" height="40"  alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Dashboard</a></li>
                    <li><a href="Contacts" class="nav-link px-2 text-white">Contacts</a></li>
                    <li><a href="Gallery" class="nav-link px-2 text-white">Gallery</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="Site" class="nav-link px-2 text-white">Site</a></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="mt-3 mb-3">Gallery</h1>

        <div class="card">
            <div class="card-header">Select File</div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="50%" align="right"><b>Select File</b></td>
                        <td width="50%">
                            <input type="file" id="select_file" multiple />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br />
        <div class="progress" id="progress_bar" style="display:none; ">

            <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%">0%</div>

        </div>

        <div id="uploaded_image_info" class="row mt-5"></div>
        <div id="uploaded_image" class="row mt-5">
            <?php 
                foreach ($images as $image) {
                    echo '
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img class="img-fluid" src="' . PROOT . $image['gallery_media'].'">
                                <a href="?delete='.$image['id'].'&location='.$image['gallery_media'].'" class="text-danger">delete</a>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>

    <script>

        function _(element) {
            return document.getElementById(element);
        }

        _('select_file').onchange = function(event) {

            var form_data = new FormData();

            var image_number = 1;

            var error = '';

            for (var count = 0; count < _('select_file').files.length; count++) {
                if (!['image/jpeg', 'image/png', 'video/mp4'].includes(_('select_file').files[count].type)) {
                    error += '<div class="alert alert-danger"><b>'+image_number+'</b> Selected File must be .jpg or .png Only.</div>';
                } else {
                    form_data.append("images[]", _('select_file').files[count]);
                }

                image_number++;
            }

            if (error != '') {
                _('uploaded_image_info').innerHTML = error;

                _('select_file').value = '';
            } else {
                _('progress_bar').style.display = 'block';

                var ajax_request = new XMLHttpRequest();

                ajax_request.open("POST", "controller/gallery.upload.php");

                ajax_request.upload.addEventListener('progress', function(event){

                var percent_completed = Math.round((event.loaded / event.total) * 100);

                _('progress_bar_process').style.width = percent_completed + '%';

                _('progress_bar_process').innerHTML = percent_completed + '% completed';

            });

            ajax_request.addEventListener('load', function(event) {

                _('uploaded_image_info').innerHTML = '<div class="alert alert-success">Files Uploaded Successfully</div>';

                _('select_file').value = '';
                
                setTimeout(function () {
                    window.location = '<?= PROOT; ?>admin/Gallery';
                }, 1050);

            });

            ajax_request.send(form_data);
        }

    };

    </script>
</body>
</html>


