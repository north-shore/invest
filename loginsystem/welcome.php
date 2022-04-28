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

                

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accbal-info owl-carousel owl-loaded owl-drag">

                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1049px, 0px, 0px); transition: all 0s ease 0s; width: 3410px;"><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic5.png" class="img-fluid">  </span>
                                                <strong>  Pending Withdrawal   </strong>
                                                <h5> <small>$</small> 0.00  </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic3.png" class="img-fluid"></span>
                                                <strong>    Withdraw Total   </strong>
                                                <h5> <small> $ </small>  0.00    </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic2.png" class="img-fluid"></span>
                                                <strong>    Last Deposit   </strong>
                                                <h5> <small> $ </small>  0.000   </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic6.png" class="img-fluid"></span>
                                                <strong>     Last Withdrawal       </strong>
                                                <h5> <small> $ </small>  0.000   </h5>
                                            </div></div><div class="owl-item active" style="width: 252.25px; margin-right: 10px;"><div class="acc-block">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic1.png" class="img-fluid">  </span>
                                                <strong>  Account Balance      </strong>
                                                <h5> <small>$</small>0.00  </h5>
                                            </div></div><div class="owl-item active" style="width: 252.25px; margin-right: 10px;"><div class="acc-block">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic5.png" class="img-fluid">  </span>
                                                <strong>  Pending Withdrawal   </strong>
                                                <h5> <small>$</small> 0.00  </h5>
                                            </div></div><div class="owl-item active" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic3.png" class="img-fluid"></span>
                                                <strong>    Withdraw Total   </strong>
                                                <h5> <small> $ </small>  0.00    </h5>
                                            </div></div><div class="owl-item active" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic2.png" class="img-fluid"></span>
                                                <strong>    Last Deposit   </strong>
                                                <h5> <small> $ </small>  0.000   </h5>
                                            </div></div><div class="owl-item" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic6.png" class="img-fluid"></span>
                                                <strong>     Last Withdrawal       </strong>
                                                <h5> <small> $ </small>  0.000   </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic1.png" class="img-fluid">  </span>
                                                <strong>  Account Balance      </strong>
                                                <h5> <small>$</small>0.00  </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic5.png" class="img-fluid">  </span>
                                                <strong>  Pending Withdrawal   </strong>
                                                <h5> <small>$</small> 0.00  </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic3.png" class="img-fluid"></span>
                                                <strong>    Withdraw Total   </strong>
                                                <h5> <small> $ </small>  0.00    </h5>
                                            </div></div><div class="owl-item cloned" style="width: 252.25px; margin-right: 10px;"><div class="acc-block theme2">
                                                <span> <img src="./Green Deal Trading Limited_files/acc-ic2.png" class="img-fluid"></span>
                                                <strong>    Last Deposit   </strong>
                                                <h5> <small> $ </small>  0.000   </h5>
                                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-12">




                            <div class="sec-note">

                                <p> <i class="fa fa-lock"> </i>
                                   </p> </div>
                        </div> </div>

                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center ptb-20">
                            <h4 class=""> <a href="deposit.php">Make a Deposit </a></h4>
                        </div>
                    </div>
                </div>


                <div class="acc-bal-theme">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="accnotes-block owl-carousel owl-loaded owl-drag">









                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1049px, 0px, 0px); transition: all 0s ease 0s; width: 3148px;"><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small>  0.00   </h5>
                                                    <span> Active Deposit </span> </div></div><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes yl-acc">
                                                    <h5><small> $ </small>  0.00   </h5>
                                                    <span> Earning Balance </span> </div></div><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small> 0.00   </h5>
                                                    <span> Withdraw Balance </span> </div></div><div class="owl-item active" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small>  0.00   </h5>
                                                    <span> Active Deposit </span> </div></div><div class="owl-item active" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes yl-acc">
                                                    <h5><small> $ </small>  0.00   </h5>
                                                    <span> Earning Balance </span> </div></div><div class="owl-item active" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small> 0.00   </h5>
                                                    <span> Withdraw Balance </span> </div></div><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small>  0.00   </h5>
                                                    <span> Active Deposit </span> </div></div><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes yl-acc">
                                                    <h5><small> $ </small>  0.00   </h5>
                                                    <span> Earning Balance </span> </div></div><div class="owl-item cloned" style="width: 339.667px; margin-right: 10px;"><div class="acc-notes">
                                                    <h5><small>$</small> 0.00   </h5>
                                                    <span> Withdraw Balance </span> </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
























            </div>



            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="admin-cpyrgt"> Copyright © 2021-2022 All Rights Reserved <br><a href="../index.htm/" class="">Green Deal Trading Limited</a> </div>
                    </div>
                </div>
            </div>


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
</body>

</html>
<?php } ?>