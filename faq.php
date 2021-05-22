<?php
    include("setting.php");
    $title = $siteName . " : FAQ";
    $page = 6;
?>
<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>

<style>

    input {
        display: none;
    }

    label {
        display: block;    
        padding: 8px 22px;
        margin: 0 0 1px 0;
        cursor: pointer;
        background: #6AAB95;
        border-radius: 3px;
        color: #FFF;
        transition: ease .5s;
    }

    label:hover {
        background: #4E8774;
    }

    .content {
        background: white;
        padding: 10px 25px;
        border: 1px solid #A7A7A7;
        margin: 0 0 1px 0;
        border-radius: 3px;
    }

    input + label + .content {
        display: none;
    }

    input:checked + label + .content {
        display: block;
    }

</style>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
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

    <!-- Start Contact -->
    <div class="container py-5">
        <h1 class="h1">FAQs</h1>

        <input type="checkbox" id="title1" />
        <label for="title1">Transportation within Magodo</label>

        <div class="content">
            <ul>
                <li>1 - 5 DOZEN - N1, 500.00</li>
                <li>6 - 10 DOZEN - N2, 000.00</li>
                <li>10 - 20 DOZEN - N2, 500.00</li>
                <li>OVER 20 DOZEN - N3, 000.00 – N4, 000.00</li>
            </ul>
        </div>

        <input type="checkbox" id="title2" />
        <label for="title2">Transportation outside Magodo</label>

        <div class="content">
            <ul>
                <li>1 - 5 DOZEN - N2, 500.00</li>
                <li>6 - 10 DOZEN - N3, 000.00</li>
                <li>10 - 20 DOZEN - N3, 500.00</li>
                <li>OVER 20 DOZEN - N4, 000.00 – N6, 000.00</li>
            </ul>
        </div>

        <input type="checkbox" id="title3" />
        <label for="title3">Outside Lagos</label>

        <div class="content">
        <p>Negotiable but based on distance.</p>
        </div>

        <input type="checkbox" id="title4" />
        <label for="title4">Deposit against damages</label>

        <div class="content">
            <ul>
                <li>1 - 10 DOZEN - N2, 000.00</li>
                <li>10 - 20 DOZEN - N4, 000.00</li>
                <li>CHIVARY CHAIRS & BANQUEST TABLES - N5, 000.00</li>
                <li>OVER 20 DOZEN - N6, 000.00</li>
            </ul>
        </div>

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