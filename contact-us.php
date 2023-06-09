<?php 

    require_once ('connection/conn.php');
    $headerTitle = 'Contact us - B.C.F.A';
    include ("include/header.php");

    $contact_fname = (isset($_POST['contact_fname']) ? sanitize($_POST['contact_fname']) : '');
    $contact_lname = (isset($_POST['contact_lname']) ? sanitize($_POST['contact_lname']) : '');
    $contact_email = (isset($_POST['contact_email']) ? sanitize($_POST['contact_email']) : '');
    $contact_phone = (isset($_POST['contact_phone']) ? sanitize($_POST['contact_phone']) : '');
    $contact_message = (isset($_POST['contact_message']) ? sanitize($_POST['contact_message']) : '');
    if ($_POST) {
        $added_date = date('Y-m-d H:i:s A');
        $errors = '';

        $post = array(
            'contact_fname' => 'First name',
            'contact_lname' => 'Last name',
            'contact_email' => 'Email',
            'contact_message' => 'Message',
        );
        foreach ($post as $k => $v) {
            if (empty($_POST[$k])) {
                $errors = '<script>alert("'.$v.' is required.");</script>';
                break;
            }
        }

        if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
            $errors = '<script>alert("Email is not valid.");</script>';
        }

        if (empty($errors)) {
            $data = [
                ':contact_fname'    => $contact_fname,
                ':contact_lname'        => $contact_lname,
                ':contact_email'      => $contact_email,
                ':contact_phone'      => $contact_phone,
                ':contact_message'      => $contact_message,
                ':contact_date_addded'      => $added_date,
            ];
            $to = 'info@blockchainfoundationafrica.com';
            $subject = $contact_fname . ' send a message.';
            $body = '
                <html>
                <head>
                   <title>Message to BCFA</title>
                </head>
                <body>
                   <p>
                        <center>
                            <h3>Full Name</h3>
                            <b>' . ucwords($contact_fname . ' ' . $contact_lname) . '</b>
                            <br>
                            <h3>Email</h3>
                            <b>' . $contact_email . '</b>
                            <br>
                            <h3>Message</h3>
                            <b>' . nl2br($contact_message) . '</b>
                        </center>
                    </p>
               </body>
               </html>
            ';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $contact_email;
                
            if (mail($to, $subject, $body, $headers)) {
                $query = "
                    INSERT INTO `bcfa_contact`(`contact_fname`, `contact_lname`, `contact_email`, `contact_phone`, `contact_message`, `contact_date_addded`)
                    VALUES (:contact_fname, :contact_lname, :contact_email, :contact_phone, :contact_message, :contact_date_addded)
                ";
                $statement = $conn->prepare($query);
                $result = $statement->execute($data);
                if ($result) {
                    $message = '
                        <p>We have receive your message.</p>
                        <p>We will get back to you as soon as possible.</p>
                        <p>Best Regards, Blockchain Foundation Africa.</p>
                    ';
                    send_email($contact_fname, $contact_email, 'Message received, BCFA.', $message);
                    echo '<script>alert("Message sent successfully.");</script>';
                    redirect(PROOT . "contact-us");
                }
            }
        }

        echo $errors;
    }
?>

    <!-- MAIN -->
    <main id="content" role="main">
        <div class="position-relative bg-img-start" style="background-image: url(./assets/svg/components/card-11.svg);">
            <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 position-relative zi-2">
                <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <h1>Contact us</h1>
                    <p>We'd love to talk about how we can help you.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="card card-transition text-center h-100" href="mailto:info@blockchainfoundationafrica.com">
                            <div class="card-body">
                                <div class="svg-icon text-info mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#035A4B" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.591 13.209V14.868H11.851C14.392 14.868 16.387 12.915 16.387 10.395C16.387 7.875 14.392 5.922 11.851 5.922C9.31 5.922 7.336 7.875 7.336 10.395H9.121C9.121 8.799 10.234 7.581 11.851 7.581C13.447 7.581 14.602 8.799 14.602 10.395C14.602 11.991 13.447 13.209 11.851 13.209H10.591ZM12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16Z" fill="#035A4B" />
                                    </svg>
                                </div>
                                <h4 class="card-title">Help Desk</h4>
                                <p class="card-text text-body">We're here to help with any questions or code.</p>
                            </div>
                            <div class="card-footer pt-0">
                                <span class="card-link">Contact support <i class="bi-chevron-right small ms-1"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="card card-transition text-center h-100" href="javascript:;">
                            <div class="card-body">
                                <div class="svg-icon text-info mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z" fill="#035A4B" />
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z" fill="#035A4B" />
                                    </svg>
                                </div>
                                <h4 class="card-title">FAQ</h4>
                                <p class="card-text text-body">Search our FAQ for answers to anything you might ask.</p>
                            </div>
                            <div class="card-footer pt-0">
                                <span class="card-link">Visit FAQ <i class="bi-chevron-right small ms-1"></i></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a class="card card-transition text-center h-100" href="mailto:sponsor@blockchainfoundationafrica.com ">
                            <div class="card-body">
                                <div class="svg-icon text-info mb-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5688 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5688 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="#035A4B" />
                                        <path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="#035A4B" />
                                    </svg>
                                </div>
                                <h4 class="card-title">Sponsor</h4>
                                <p class="card-text text-body">Check out our development quickstart guide.</p>
                            </div>
                            <div class="card-footer pt-0">
                                <span class="card-link">Contact sales <i class="bi-chevron-right small ms-1"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="shape shape-bottom zi-1">
                <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 500H3000V0L0 500Z" fill="#fff" />
                </svg>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="mx-auto" style="max-width: 35rem;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-5 mb-md-9">
                            <h2>Tell us about yourself</h2>
                            <p>Whether you have questions or you would just like to say hello, contact us.</p>
                        </div>
                        <form method="POST">
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="contact_fname">First name</label>
                                        <input type="text" class="form-control form-control-lg" name="contact_fname" id="contact_fname" placeholder="First name" aria-label="First name" value="<?= $contact_fname; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="contact_lname">Last name</label>
                                        <input type="text" class="form-control form-control-lg" name="contact_lname" id="contact_lname" placeholder="Last name" aria-label="Last name" value="<?= $contact_lname; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="contact_email">Email address</label>
                                        <input type="email" class="form-control form-control-lg" name="contact_email" id="contact_email" placeholder="email@site.com" aria-label="email@site.com" value="<?= $contact_email; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="contact_phone">Phone <span class="form-label-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control form-control-lg" name="contact_phone" id="contact_phone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="<?= $contact_phone; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact_message">Details</label>
                                <textarea class="form-control form-control-lg" name="contact_message" id="contact_message" placeholder="Tell us about your ..." aria-label="Tell us about your ..." rows="4"><?= $contact_message; ?></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-info btn-lg">Send inquiry</button>
                            </div>
                            <div class="text-center">
                                <p class="form-text">We'll get back to you in 1-2 business days.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leaflet -->
        <div class="container-fluid mb-3">
            <div class="overflow-hidden">
                <div id="map" class="leaflet" data-hs-leaflet-options='{
                    "map": {
                        "scrollWheelZoom": false,
                        "coords": [6.7121646, -1.5224317]
                    },
                    "marker": [
                        {
                            "coords": [6.7121646, -1.5224317],
                            "icon": {
                               "iconUrl": "./assets/media/svg/pin.svg",
                               "iconSize": [50, 45]
                            },
                            "popup": {
                                "text": "AE-0458-0604 Blockchain Foundation Africa, Fumesua"
                            }
                        }
                    ]
                }'>
                </div>
            </div>
        </div>
    </main>
<?php include ('include/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="./assets/js/masonry.pkgd.min.js"></script>

    