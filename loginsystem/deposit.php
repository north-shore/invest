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

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/fontawesome-all.css">
    <link href="./Green Deal Trading Limited_files/css2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/admin.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/responsive.css">
    <link rel="stylesheet" type="text/css" href="./Green Deal Trading Limited_files/style-ready.css">


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
            <div class="greener" >
                <section class="section-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="referral-block owl-carousel">

                                    <li> <img src="../images/level-Level%20A.png" class="img-fluid"> <span> Level A </span>
                                        <h4> 5.00   % </h4>
                                    </li>

                                    <!-- 1
                           2 -->

                                    <li> <img src="../images/level-Level%20B.png" class="img-fluid"> <span> Level B </span>
                                        <h4> 6.00   % </h4>
                                    </li>

                                    <!-- 3
                           5 -->

                                    <li> <img src="../images/level-Level%20C.png" class="img-fluid"> <span> Level C </span>
                                        <h4> 8.00   % </h4>
                                    </li>

                                    <!-- 6
                           10 -->

                                    <li> <img src="../images/level-Level%20D.png" class="img-fluid"> <span> Level D </span>
                                        <h4> 11.50   % </h4>
                                    </li>

                                    <!-- 11
                           20 -->

                                    <li> <img src="../images/level-Level%20E.png" class="img-fluid"> <span> Level E </span>
                                        <h4> 15.00   % </h4>
                                    </li>

                                    <!-- 21
                           and more -->



                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-5"  style="background-color: #227309">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading text-center ptb-20">
                                    <h4 class="yl-bg"> Invesment Plans </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <script language="javascript"><!--
                                function openCalculator(id)
                                {

                                    w = 225; h = 400;
                                    t = (screen.height-h-30)/2;
                                    l = (screen.width-w-30)/2;
                                    window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");




                                }

                                function updateCompound() {
                                    var id = 0;
                                    var tt = document.spendform.h_id.type;
                                    if (tt && tt.toLowerCase() == 'hidden') {
                                        id = document.spendform.h_id.value;
                                    } else {
                                        for (i = 0; i < document.spendform.h_id.length; i++) {
                                            if (document.spendform.h_id[i].checked) {
                                                id = document.spendform.h_id[i].value;
                                            }
                                        }
                                    }

                                    var cpObj = document.getElementById('compound_percents');
                                    if (cpObj) {
                                        while (cpObj.options.length != 0) {
                                            cpObj.options[0] = null;
                                        }
                                    }

                                    if (cps[id] && cps[id].length > 0) {
                                        document.getElementById('coumpond_block').style.display = '';

                                        for (i in cps[id]) {
                                            cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                        }
                                    } else {
                                        document.getElementById('coumpond_block').style.display = 'none';
                                    }
                                }
                                var cps = {};
                                --></script>

                            <div class="col-md-12">
                                <div class="plan-block owl-carousel">           <div class="pricing-plan">
                                        <div class="plan-info">
                                            <div class="plan-head"> <span>                 <input type="hidden" name="h_id" value='1'>


                Plan 1 </span>
                                                <h5> Principal Included </h5>
                                                <small> UpTo 2.86% Daily For 90 Days </small> </div>
                                            <ul>


                                                <!-- Plan 1-->

                                                <li> $20.00 - $10000.00 <span> 2.51% </span> </li>


                                                <!-- Plan 2-->

                                                <li> $10001.00 - $50000.00 <span> 2.86% </span> </li>
                                           
											 <div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="investpay.php">Subcribe</a> </div>
											</ul>
											
                                        </div>
                                        <div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="https://www.greendealtrading.com/?a=calendar&type=1">Calculate</a> </div>
                                    </div>
                                    <div class="pricing-plan">
                                        <div class="plan-info">
                                            <div class="plan-head"> <span>                 <input type="hidden" name="h_id" value='2'>


                Plan 2 </span>
                                                <h5> Principal Included </h5>
                                                <small> UpTo 416% Fixed For 14 Days </small> </div>
                                            <ul>


                                                <!-- Plan 1-->

                                                <li> $800.00 - $10000.00 <span> 390.00% </span> </li>


                                                <!-- Plan 2-->

                                                <li> $10001.00 - $50000.00 <span> 416.00% </span> </li>
												
												<div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="investpay2.php">Subcribe</a> </div>
                                            </ul>
                                        </div>
                                        <div class="plan-btn"> <a class="btn btn-secondary"target="_blank" href="https://www.greendealtrading.com/?a=calendar&type=2">Calculate</a> </div>
                                    </div>
                                    <div class="pricing-plan">
                                        <div class="plan-info">
                                            <div class="plan-head"> <span>                 <input type="hidden" name="h_id" value='3'>


                Plan 3 </span>
                                                <h5> Principal Included </h5>
                                                <small> UpTo 24.73% Daily For 17  Days </small> </div>
                                            <ul>


                                                <!-- Plan 1-->

                                                <li> $1000.00 - $10000.00 <span> 19.36% </span> </li>


                                                <!-- Plan 2-->

                                                <li> $10001.00 - $50000.00 <span> 24.73% </span> </li>
												
												<div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="investpay3.php">Subcribe</a> </div>
                                            </ul>
                                        </div>
                                        <div class="plan-btn"> <a class="btn btn-secondary"  target="_blank" href="https://www.greendealtrading.com/?a=calendar&type=3">Calculate</a> </div>
                                    </div>
                                    <div class="pricing-plan">
                                        <div class="plan-info">
                                            <div class="plan-head"> <span>                 <input type="hidden" name="h_id" value='4'>


                Plan 4 </span>
                                                <h5> Principal Included </h5>
                                                <small> UpTo 698% Fixed For 75 Days </small> </div>
                                            <ul>


                                                <!-- Plan 1-->

                                                <li> $200.00 - $10000.00 <span> 612.00% </span> </li>


                                                <!-- Plan 2-->

                                                <li> $10001.00 - $50000.00 <span> 698.00% </span> </li>
												
												<div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="investpay3.php">Subcribe</a> </div>
                                            </ul>
                                        </div>
                                        <div class="plan-btn"> <a class="btn btn-secondary"  target="_blank" href="https://www.greendealtrading.com/?a=calendar&type=4">Calculate</a> </div>
                                    </div>
                                    <div class="pricing-plan">
                                        <div class="plan-info">
                                            <div class="plan-head"> <span>                 <input type="hidden" name="h_id" value='5'>


                Plan 5 </span>
                                                <h5> Principal Included </h5>
                                                <small> UpTo 401% Fixed For Only 3 Days </small> </div>
                                            <ul>


                                                <!-- Plan 1-->

                                                <li> $2000.00 - $10000.00 <span> 370.00% </span> </li>


                                                <!-- Plan 2-->

                                                <li> $10001.00 - $50000.00 <span> 401.00% </span> </li>
												
												<div class="plan-btn"> <a class="btn btn-secondary" target="_blank" href="investpay4.php">Subcribe</a> </div>
                                            </ul>
                                        </div>
                                        <div class="plan-btn"> <a class="btn btn-secondary"  target="_blank" href="https://www.greendealtrading.com/?a=calendar&type=5">Calculate</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>





            </div>


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
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/owl.carousel.min.js"></script>

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