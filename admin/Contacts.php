<?php 

    require_once ('../connection/conn.php');

    $sql = "
        SELECT * FROM bcfa_contact 
        ORDER BY id DESC
    ";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $contacts = $statement->fetchAll();

    if (isset($_GET['delete']) && !empty($_GET['delete'])) {
        // code..
        $id = sanitize((int)$_GET['delete']);
       
        // code...
        $deleteQuery = "
            DELETE FROM bcfa_contact 
            WHERE id = ?
        ";
        $statement = $conn->prepare($deleteQuery);
        $result = $statement->execute([$id]);
        if ($result) {
            // code...
            $_SESSION['flash_success'] = 'Contact Deleted';
            redirect(PROOT . 'admin/Contacts');
        }
        
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo/bcfa-logo-sm.png">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Contact . Admin</title>
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
        <h1 class="mt-3 mb-3">Contacts</h1>
        <?= $flash; ?>

        <div class="table-responsive mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Frist Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 1;
                        foreach ($contacts as $contact) {
                            echo '
                                <tr>
                                    <td>' . $i . '</td>
                                    <td>' . ucwords($contact['contact_fname']) . '</td>
                                    <td>' . ucwords($contact['contact_lname']) . '</td>
                                    <td>' . $contact['contact_email'] . '</td>
                                    <td>' . $contact['contact_phone'] . '</td>
                                    <td>' . nl2br($contact['contact_message']) . '</td>
                                    <td>
                                        <a href="?delete=' . $contact['id'] . '">delete</a>
                                    </td>
                                </tr>
                            ';
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


