<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet">
    <title>Green Deal Trading Limited</title>
    <link rel="icon" href="../images/favicon.png">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.css">
    <link href="css2?family=quicksand:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/style-ready.css">
    <link href="css2?family=quicksand:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <title>Welcome </title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet">
    <title>Green Deal Trading Limited</title>
    <link rel="icon" href="../images/favicon.png">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.css">
    <link href="css2?family=quicksand:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/style-ready.css">
    <link href="css2?family=quicksand:wght@100;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/fontawesome-all.css">
    <link href="./Green Deal Trading Limited_files/css2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/admin.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/responsive.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/style-ready.css">

<script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
    </head>



    <body>
<div class="img_center">
<img src="../images/logo.png">
	</div>

<section class="section-1 bg1">
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <div class="nav-info">
                <div class="mobile-head">
                    <h5 class="main-menu"> Main Menu</h5>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button></div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="float: right" class="navbar-nav ml-auto">
                        <li > <i class="fa fa-cubes"> </i><span><a href="welcome.php"><?php echo $_SESSION['name'];?></a> </li>
                        <li> <i class="fa fa-map-pin"> </i> <span><a href="logout.php">Logout</a> </li>

                    </ul>
                </div>
            </div>

            

        </div>
    </nav>
</div>
    <div class="wrapper">
       


        <div id="content">
            <div class="admin_main">

                


            </div>

            <div class="container" style="background-color: #1c7430">
                <div class="row">


                    <div class="col-xl-12" >
                        <div class="banner-info">
                            <h2 class="">  Deposit <br>
                            </h2>


                        </div>

                    </div>

                </div>
            </div>
            <section class="section-2">
                <div class="container">











                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading text-center ptb-20">
                                <h4 class="">   Deposit Confirmation </h4>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="transaction-table" cellspacing="0" cellpadding="2">
                                    <tbody><tr>
                                        <th>Plan:</th>
                                        <td>UpTo 401% Fixed For Only 3 Days	</td>
                                        <td rowspan="6"><img id="coin_payment_image" src="images/btc.png"></td>
                                    </tr>
                                    <tr>
                                        <th>Profit:</th>
                                        <td>370.00% after 3 days
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Principal Return:</th>
                                        <td>YES</td>
                                    </tr>
                                    <tr>
                                        <th>Principal Withdraw:</th>
                                        <td>
                                            Not available </td>
                                    </tr>


                                    <tr>
                                        <th>Credit Amount:</th>
                                        <td>$2000.00 - $10.000(370%) & $10001 - $50000(370%)</td>
                                    </tr>
                                    <tr>
                                        <th>Deposit Fee:</th>
                                        <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                                    </tr>
                                    <tr>
                                        <th>Debit Amount:</th>
                                        <td>$...</td>
                                    </tr>
                                    <tr>
                                        <th>BTC Debit Amount:</th>
                                        <td>...</td>
                                    </tr>
                                    </tbody></table>
                            </div>

                        </div>
                    </div>

                    <div class="coin_form btc_form btc1" id="btc_form">Please send to <i><p style="color: #1606ff" id="text">3ABQnKigtds6brKpmxcCEhPdaMp17Lrja1</p>
<button  class="btn btn-secondary" onclick="copyToClipboard('#text')">Copy To Clipboard</button></i><br></div><div id="placeforstatus"> <div class="payment_status"><b>Order status:</b> <span class="status_text">Waiting for payment</span></div> </div>

                </div>
            </section>

            <section class="section-7 pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="sec-info owl-carousel owl-loaded owl-drag">





                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1120px, 0px, 0px); transition: all 0s ease 0s; width: 3360px;"><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic1.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic2.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic3.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic4.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic5.png" class="img-fluid"> </li></div><div class="owl-item active" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic1.png" class="img-fluid"> </li></div><div class="owl-item active" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic2.png" class="img-fluid"> </li></div><div class="owl-item active" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic3.png" class="img-fluid"> </li></div><div class="owl-item active" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic4.png" class="img-fluid"> </li></div><div class="owl-item active" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic5.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic1.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic2.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic3.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic4.png" class="img-fluid"> </li></div><div class="owl-item cloned" style="width: 214px; margin-right: 10px;"><li> <img src="./Green Deal Trading Limited_files/payment-ic5.png" class="img-fluid"> </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container" class="greener" >

                <div class="row">
                    <div class="col-md-12">
                        <div class="admin-cpyrgt"> Copyright © 2021-2022 All Rights Reserved <br><a href="../index.htm/" class="">Green Deal Trading Limited</a> </div>
                    </div>
                </div>
            </v>
    </div>


    </div>





        <script src="./Green Deal Trading Limited_files/jquery-2.1.4.min.js.download"></script>
        <script src="./Green Deal Trading Limited_files/popper.min.js.download"></script>
        <script src="./Green Deal Trading Limited_files/bootstrap.min.js.download"></script>
        <script src="./Green Deal Trading Limited_files/script.js.download"></script>
        <script src="./Green Deal Trading Limited_files/owl.carousel.min.js.download"></script>
    </body></html>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){

        window.addEventListener('scroll', function() {

            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
    // DOMContentLoaded  end
</script>

</body>

</html>
<?php } ?>