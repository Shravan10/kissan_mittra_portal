<!DOCTYPE html>
<html>
<?php require_once('config.php'); ?>
<?php require_once('session_check.php'); ?>
<head>
    <title>Add Product | <?= SITE_TITLE; ?></title>
	<?php include("top-header.php"); ?>
</head>

<body class="mini-navbar">

    <div id="wrapper">
    <!-- Menu -->
	<?php include('left-menu.php'); ?>
        <div id="page-wrapper" class="gray-bg">
        <!-- Header -->
		<?php include('top-navbar.php'); ?>
            <!--<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>E-commerce product list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>E-commerce</a>
                        </li>
                        <li class="active">
                            <strong>Product list</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>-->

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-2">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="p-sm">
                                <img src="img/icons/plants.png" class="img-responsive" />
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <small class="text-muted">Category</small>
                                <a href="#" class="product-name"> Product</a>



                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
        <?php include("footer.php"); ?>

    </div>
</div>
        <?php include("bot-footer.php"); ?>
</body>

</html>
