<?php
    include("setting.php");
    $title = $siteName . " : Contact Us";
    $page = 5;

    if(!empty($_POST["send"])) {
        $name = $_POST["userName"];
        $email = $_POST["userEmail"];
        $subject = $_POST["subject"];
        $content = $_POST["content"];
    
        // $toEmail = "info@emarentals.com";
        $toEmail = "adefolarin.adeniji@gmail.com";
        $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        if(mail($toEmail, $subject, $content, $mailHeaders)) {
            $message = "Your contact information was sent successfully.";
            $type = "success";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@emarentals.com">info@emarentals.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:08033000122">(+234) 800 300 0122 | (+234) 805 745 4799</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

    <?php include("nav-header.php"); ?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Visit our store today or send us an email using the form below:
            </p>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.246003117679!2d3.3697019501070065!3d6.616329323889912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93ae8b461ed7%3A0xc7c5f985cb446284!2sMagodo%20Gate%201(Shangisha)!5e0!3m2!1sen!2sng!4v1621685890816!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <div id="statusMessage"> 
                <?php
                if (! empty($message)) {
                    ?>
                    <p class='text-success <?php echo $type; ?>Message'><?php echo $message; ?></p>

                    <script>
                        window.scrollTo(0, 800);
                    </script>
                <?php
                }
                ?>
            </div>
            <form name="frmContact" id="" frmContact="" method="post"
                action="" enctype="multipart/form-data"
                onsubmit="return validateContactForm()">
            
                <div class="input-row">
                    <label style="padding-top: 20px;">Name</label> <span
                        id="userName-info" class="info"></span><br /> <input
                        type="text" class="input-field form-control mt-1" name="userName"
                        id="userName" />
                </div>
                <div class="input-row">
                    <label>Email</label> <span id="userEmail-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field form-control mt-1" name="userEmail" id="userEmail" />
                </div>
                <div class="input-row">
                    <label>Subject</label> <span id="subject-info"
                        class="info"></span><br /> <input type="text"
                        class="input-field form-control mt-1" name="subject" id="subject" />
                </div>
                <div class="input-row">
                    <label>Message</label> <span id="userMessage-info"
                        class="info"></span><br />
                    <textarea name="content" id="content"
                        class="input-field form-control mt-1" cols="60" rows="6"></textarea>
                </div>
                    <div class="row">
                    <div class="col text-end mt-2">
                    <input type="submit" name="send" class="btn-submit"
                        value="Send" />
                    </div>
                </div>
            </form>
            
        </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
        <script type="text/javascript">
            function validateContactForm() {
                var valid = true;

                $(".info").html("");
                $(".input-field").css('border', '#e0dfdf 1px solid');
                var userName = $("#userName").val();
                var userEmail = $("#userEmail").val();
                var subject = $("#subject").val();
                var content = $("#content").val();
                
                if (userName == "") {
                    $("#userName-info").html("Required.");
                    $("#userName").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (userEmail == "") {
                    $("#userEmail-info").html("Required.");
                    $("#userEmail").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
                {
                    $("#userEmail-info").html("Invalid Email Address.");
                    $("#userEmail").css('border', '#e66262 1px solid');
                    valid = false;
                }

                if (subject == "") {
                    $("#subject-info").html("Required.");
                    $("#subject").css('border', '#e66262 1px solid');
                    valid = false;
                }
                if (content == "") {
                    $("#userMessage-info").html("Required.");
                    $("#content").css('border', '#e66262 1px solid');
                    valid = false;
                }
                return valid;
            }
        </script>

        <h1 class="h1">Important Information</h1>
        <p>You can call us on (+234) 803 300 0122 | (+234) 805 745 4799 to place your order today.</p>

    </div>
    <!-- End Contact -->

    <?php include("footer.php"); ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>