<?php
/**
 * Created by PhpStorm.
 * User: mouhamed
 * Date: 04/04/2019
 * Time: 03:34
 */
include '../core/reclamationC.php';

?>
<!doctype html>
<html lang="en">

<!-- Mirrored from theme.innovatory.in/Graby-shop/conatct.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 18:23:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="icon" href="../img/index/favicon.png" sizes="16x16">
    <!--css-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/range-select.css" rel="stylesheet" type="text/css">
    <!--BOOTSTRAP-->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../fonts/font/flaticon.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="contact-page contact-page_1"><!--page wrap-->

    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

    <!--header-->
    <header class="border">
        <div class="container header-sec">

            <div class="col-md-5 header">
                <div class="header-left">
                    <div class="top-bar-list phone">
                        <i class="flaticon-phone-call"></i>
                        <p>+01 (9876) 543 210</p>
                    </div>
                    <div class="top-bar-list">
                        <i class="flaticon-e-mail-envelope"></i>
                        <p>Info@grabyshop.com</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 header">
                <div class="header-right">
                    <div class="top-bar-list">
                        <i class="flaticon-placeholder"></i>
                        <a href="#"><p>Store locator</p></a>
                    </div>
                    <div class="top-bar-list">
                        <i class="flaticon-delivery"></i>
                        <a href="#"><p>Track order</p></a>
                    </div>
                    <div class="top-bar-list">
                        <i class="flaticon-login"></i>
                        <p><b><a href="#" data-toggle="modal" data-target="#myModal">Register</a></b> or <b><a href="#" data-toggle="modal" data-target="#myModal2">Sign in</a></b></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>



        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="col-sm-5 modal-img">
                            <img src="../img/index/modal-bg.jpg" class="img-responsive" alt="" />
                            <h2>Sign In</h2>
                            <p>Sign up our Website and receive up to $100 coupon for first shopping</p>
                            <div class="modal-img-text"><a href="#"><img src="../img/index/login-logo.png" alt="" class="img-responsive" /></a></div>
                        </div>
                        <div class="col-sm-7 modal-text">

                            <div class="form-sec">


                                <div class="tab-content">
                                    <div class="social-button">
                                        <div class="facebook"><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i>Sign in with facebook</a></div>
                                        <div class="facebook google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>Sign in with google</a></div>
                                        <div class="facebook twitter text-center"><a href="#"><i class="fa fa-twitter pull-left" aria-hidden="true"></i>Sign in with twitter</a></div>
                                    </div>
                                    <div class="or"><span>Or</span></div>
                                    <div class="input-row">
                                        <h5>username</h5><input class="input-1" type="text" name="username" placeholder="Enter username" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="input-row">
                                        <h5>email</h5><input class="input-1" type="email" name="email" placeholder="Enter your Email ID" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="input-row">
                                        <h5>password</h5><input class="input-1" type="text" name="password" placeholder="Enter your password" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="input-row">
                                        <h5>Re-enter your password</h5><input class="input-1" type="text" name="re-enter-password" placeholder="Re-Enter your Password" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="privacy-sec">
                                        <input id="4" type="checkbox" /><label for="4">Remember me</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="button">
                                        <a href="#">Get started</a>
                                    </div>
                                    <div class="modal-acc">
                                        <p>Already have an account? <a data-toggle="modal" id="reg-m" data-target="#myModal2" href="#">Log In</a></p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>

        <!--modal-->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="col-sm-5 modal-img">
                            <img src="../img/index/modal-bg.jpg" class="img-responsive" alt="" />
                            <h2>Login</h2>
                            <p>Sign up our Website and receive up to $100 coupon for first shopping</p>
                            <div class="modal-img-text"><a href="#"><img src="../img/index/login-logo.png" alt="" class="img-responsive" /></a></div>
                        </div>
                        <div class="col-sm-7 modal-text">

                            <div class="form-sec">


                                <div class="tab-content">
                                    <div class="social-button">
                                        <div class="facebook"><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i>Sign in with facebook</a></div>
                                        <div class="facebook google"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>Sign in with google</a></div>
                                        <div class="facebook twitter text-center"><a href="#"><i class="fa fa-twitter pull-left" aria-hidden="true"></i>Sign in with twitter</a></div>
                                    </div>
                                    <div class="or"><span>Or</span></div>
                                    <div class="input-row">
                                        <h5>email</h5><input class="input-1" type="email" name="email" placeholder="Enter your Email ID" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="input-row">
                                        <h5>password</h5><input class="input-1" type="text" name="password" placeholder="Enter your password" />
                                        <span class="underline"></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="privacy-sec">
                                        <input id="5" type="checkbox" /><label for="5">Remember me</label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="button">
                                        <a href="#">Get started</a>
                                    </div>
                                    <div class="modal-acc">
                                        <p>Already have an account? <a data-toggle="modal" id="log-m" data-target="#myModal" href="#">Sign In</a></p>
                                    </div>
                                    <div class="swiss-right"><p>© 2018 <a href="#">Graby shop</a>. All Rights Reserved.</p></div>                        </div>

                            </div>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--search-->
    <div class="container logo-bar">
        <div class="col-md-3 logo-name text-center">
            <a href="index.html"><img src="../img/index/logo.png" alt="" class="img-responsive" /></a>
        </div>
        <div class="col-md-6 search">
            <input type="text" name="search" placeholder="Search by product name" />
            <select>
                <option>All Categories</option>
                <option>Men</option>
                <option>Women</option>
                <option>Electronics</option>
                <option>Smart Phones</option>
            </select>
            <div class="round search-round"><a href="#"><i class="flaticon-search"></i></a></div>
        </div>
        <div class="col-md-3 shopping-cart">
            <div class="icon-round">
                <a href="#"><i class="flaticon-refresh"></i></a>
                <a href="#"><i class="flaticon-heart"></i></a>
                <div class="cart-item">
                    <div class="cart-mail"><a href="#"><i class="flaticon-shopping-cart"></i><span>2</span></a></div>
                    <p><a href="#">My cart<span>$950.80</span></a></p>

                    <div class="cart-item-hover">
                        <div class="cart-item-list">
                            <img src="../img/index/cart-item-1.jpg" alt="" />
                            <a href="#"><h3>Beats Classic Headphone</h3></a>
                            <b><a href="#">X</a></b>
                            <p>$88.00 <del>$120.00</del></p>
                        </div>
                        <div class="cart-item-list">
                            <img src="../img/index/cart-item-2.jpg" alt="" />
                            <a href="#"><h3>Samsung Classic Tablet</h3></a>
                            <b><a href="#">X</a></b>
                            <p>$90.00 <del>$122.00</del></p>
                        </div>
                        <div class="border"></div>
                        <div class="cart-total">
                            <h6>Total Price</h6> <p>$178.00</p><div class="clearfix"></div>
                            <a href="#" class="cart-view">View all</a>
                            <a href="check-out.html" class="cart-checkout">Check out</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <!--menu-->
    <div class="container menu">
        <nav class="navbar navbar-default">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-left">
                    <li class="has-child"><a href="javascript:void(0)">Home  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="nav-mega-menu">
                            <div class="nav-main-menu">
								<span>
                                		<a href="index.html">Home</a>
										<a href="index-new.html">Home-V1</a>
										<a href="index-2.html">Home-Clothes</a>
										<a href="index-3.html">Home-Product</a>
								</span>
                            </div>
                        </div>
                    </li>
                    <li class="has-child"><a href="javascript:void(0)">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="nav-mega-menu">
                            <div class="nav-main-menu">
								<span>
										<a href="product-list.html">Product-List</a>
                                        <a href="product-grid.html">Product-Grid</a>
										<a href="product-detail.html">Product-Detail</a>
								</span>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Promotions</a></li>
                    <li class="has-child"><a href="javascript:void(0)">Pages <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                        <div class="nav-mega-menu">
                            <div class="nav-main-menu">
								<span>
                                		<a href="about-us.html">About</a>
										<a href="blog.html">Blog</a>
                                        <a href="blog-detail.html">Blog-Detail</a>
										<a href="cart.html">Cart</a>
                                        <a href="cart-1.html">Cart V1</a>
                                        <a href="check_out.html">Check_Out</a>
										<a href="404.html">404</a>
								</span>
                            </div>
                        </div>
                    </li>
                    <li class="has-child"><a href="javascript:void(0)">Features</a></li>
                    <li><a href="#">Super deals</a></li>
                    <li class="active has-child"><a href="javascript:void(0)">Contact <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="nav-mega-menu">
                            <div class="nav-main-menu">
								<span>
										<a href="contact.html">Contact</a>
                                        <a href="ajouter_reclamation.php" class="active">Contact V1</a>
								</span>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Super Deals</a></li>
                </ul>
            </div>

        </nav>
    </div>

    <!--Header-->
    <div class="container-fluid header-main">
        <div class="container text-center">

            <h2>VEUILLEZ RECTIFIER VOTRE RECLAMATION</h2>
            <div class="link-sec">
                <a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">RECLAMATION</a>
            </div>

        </div>
    </div>

    <!--main-->
    <?PHP

    $reclamation1C=new reclamationC();
    $listeReclamation=$reclamation1C->afficherReclamations();
    ?>
    <div class="container">
        <div class="table-reponsive checkout-right animated wow slideInUp" date-wow-delay=".5s">
            <table border="4" align="center"  class="timetable_sub" >
                <tr>
                    <th>IdReclamation</th>
                    <th>IdClient</th>
                    <th>DateAjout</th>
                    <th>type</th>
                    <th>Sujet</th>
                    <th>Etat </th>
                    <th>supprimer</th>
                    <th>modifier</th>
                </tr>

                <?PHP

                foreach($listeReclamation as $row){
                    ?>
                    <tr>
                        <th><?PHP echo $row['IdReclamation'];  ?></th>
                        <td><?PHP echo $row['IdClient'] ;  ?></td>
                        <td><?PHP echo $row['DateAjout']; ?></td>
                        <td><?PHP echo $row['type']; ?></td>
                        <td><?PHP echo $row['Sujet'];    ?></td>
                        <td><?PHP echo $row['Etat']; ?></td>

                        <td><form method="POST" action="supprimer_reclamation.php">
                                <input style="background-color:#ffffff" type="submit" name="supprimer" value="supprimer">
                                <input  type="hidden" value="<?PHP echo $row['IdReclamation']; ?>" name="IdReclamation">
                            </form>
                        </td>
                        <td><a  style="background-color:#ffffff " style="color:#fff"  href="modifreclamation.php?IdReclamation=<?PHP echo $row['IdReclamation']; ?>">
                                Modifier </a></td>
                    </tr>
                    <?PHP


                }
                ?>
            </table>
        </div>
    </div>




    <div class="container-fluid copy-right">
        <div class="container">
            <div class="col-md-4 col-sm-3 copy-text">
                <p>© 2018 <a href="#">Graby shop</a>.</p>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-9 terms-condition text-right">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Legal information</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Term of service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/page wrap-->

<!--js-->
<script src="../js/ajax.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--custom-->
<script src="../js/custom.js"></script>
<script language=JavaScript>

    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
            return false;
        }
    });

    $(document).on("contextmenu", function (e) {
        e.preventDefault();
    });

</script>
</body>

<!-- Mirrored from theme.innovatory.in/Graby-shop/conatct.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jan 2019 18:23:16 GMT -->
</html>
