<!DOCTYPE html>
<html>
<?php require_once('config.php'); ?>
<?php require_once('session_check.php'); ?>
<head>
    <title>Dashboard | <?= SITE_TITLE; ?></title>
	<?php include("top-header.php"); ?>
</head>

<body class="mini-navbar">

    <div id="wrapper">
    <!-- Menu -->
	<?php include('left-menu.php'); ?>
        <div id="page-wrapper" class="gray-bg">
        <!-- Header -->
		<?php include('top-navbar.php'); ?>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-2">
                    <div class="ibox">
                        <div class="ibox-content product-box">
						<a href="add-product.php" class="product-name"> 
                            <div class="p-sm">
                                <img src="img/icons/crops.png" class="img-responsive" />
                            </div>
							<h4 class="text-center">Sale Crops</h4>
							</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ibox">
                        <div class="ibox-content product-box">
						<a href="products.php" class="product-name"> 
                            <div class="p-sm">
                                <img src="img/icons/plants.png" class="img-responsive" />
                            </div>
							<h4 class="text-center">Buy Seeds</h4>
							</a>
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
