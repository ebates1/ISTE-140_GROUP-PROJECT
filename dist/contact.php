<?php
require("includes/configuration.inc.php");
include($db_conn);
include($product);
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $elements = array('fname', 'lname', 'commentArea');

    // ensure we have all the form data
    foreach ($elements as $element) {
        if (!isset($_POST[$element])) {
            echo '<h2>One or more fields sent to the server was empty. Please try again!</h2>';
            exit;
        }
    }

    $errors = [];

    $flag = false;
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["commentArea"], FILTER_SANITIZE_STRING);
    $captcha = $_POST['g-recaptcha-response'];

    /** Google Captcha v2 */
    $secretKey = '6Lc7ku4UAAAAAPzQbUyfUd77tAaXEQ7Q27awVI-y';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    if (trim($fname) === '' || strlen($fname) > 30) {
        array_push($errors, 'First name must contain a value and be less than 30 chars.');
      }
    
      if (trim($lname) === '' || strlen($lname) > 30) {
        array_push($errors, 'Last name must contain a value and be less than 30 chars.');
      }
    
      if (trim($message) === '' || strlen($message) > 255) {
        array_push($errors, 'Message must contain a value and be less than 255 chars.');
      }
    
      if (trim($phone) === '' || strlen($phone) > 30) {
        array_push($errors, 'Phone must contain a value and be less than 30 chars.');
      }
    
      if (trim($email) === '' || strlen($phone) > 30) {
        array_push($errors, 'Email must contain a value and be less than 30 chars.');
      }
      
        // If errors array is not empty it means that we have some errors
  if(!empty($errors)) {
    $message = "Something went wrong!";

    foreach($errors as $error) {
      $message .= "<br>$error";
    }

    $modal = "
    <div class='modal fade' id='successModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLongTitle'>Unable to complete request!</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            Execute failed: {$message}
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>
  ";
    $flag = true;
  }

    if (!$flag) {

    $mysqli = retrieveConnectionToDB();

    $sql = "INSERT INTO `smartSolutionsContact` (`firstName`, `lastName`, `email`, `phone`, `messageText`) VALUES (?, ?, ?, ?, ?);";

    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);

    if (!$stmt->execute()) {
        $modal = "
              <div class='modal fade' id='successModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLongTitle'>Unable to complete request!</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      Execute failed: {$stmt->errno}
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    </div>
                  </div>
                </div>
              </div>
            ";
    } else {
        $modal = "
              <div class='modal fade' id='successModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                  <div class='modal-content'>
                    <div class='modal-header'>
                      <h5 class='modal-title' id='exampleModalLongTitle'>Thanks!</h5>
                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    <div class='modal-body'>
                      Your message has been received. We typically reply within 1-3 business days.
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    </div>
                  </div>
                </div>
              </div>
            ";
    }
    $mysqli->close();
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>Contact</title>

    <!-- Required meta tags -->
    <?php include($meta); ?>

    <!-- Bootstrap CSS -->
    <?php include($bootstrapCss); ?>

    <!-- Google Fonts CSS -->
    <?php include($googleApisCss); ?>

    <!-- Font Awesome Script -->
    <?php include($fontAwesomeScript); ?>

    <!-- CUSTOM CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <!-- MAIN HEADER NAVBAR -->
    <?php include($navigation); ?>

    <!-- END OF MAIN HEADER NAVBAR -->

    <!-- MAIN SECTION -->

    <div class="container my-6 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Need our support? Send us a message!</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6 ">
                <form onsubmit="" class="needs-validation" action="" method="post" name="contactForm" novalidate>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input id="fname" name="fname" type="text" class="form-control" placeholder="First name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter your First Name!
                            </div>
                        </div>
                        <div class="col">
                            <input id="lname" name="lname" type="text" class="form-control" placeholder="Last name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter your Last Name!
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input id="phone" name="phone" type="tel" pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" class="form-control" placeholder="Phone" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter a valid phone number!
                            </div>
                        </div>
                        <div class="col">
                            <input id="email" name="email" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="form-control" placeholder="Email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please enter a valid email address!
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea id="commentArea" name="commentArea" class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Your message" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please enter a comment!
                        </div>
                    </div>

                    <div class="form-group">
                        <div id="captcha" class="g-recaptcha" data-sitekey="6Lc7ku4UAAAAANLNFi53G0yAGnRiwCD0MO9j1A_U" required></div>
                    </div>

                    <button class="btn btn-primary px-4 mt-2" type="submit">Submit</button>
                </form>

            </div>

            <div class="col-lg-6">
                <img src="assets/img/Map.png" class="img-fluid rounded" alt="Responsive map location">

                <div class="row mt-3">

                    <div class="col-lg-6">
                        <span class="address">Zagreb, Croatia</span>
                        <span class="address">10000 Jordanovac, 10</span>
                    </div>

                    <div class="col-lg-6">
                        <span class="address">hello@smartsolutions.com</span>
                        <span class="address">(123) 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN SECTION-->

    <!-- FOOTER -->
    <?php include($footer); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include($bootstrapScripts); ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" || $flag)   {
        echo $modal;
        echo "<script>$('#successModal').modal('show');</script>";
    } 
    ?>

    <!-- Custom javaScript -->
    <script src="assets/js/form.js"></script>

</body>

</html>