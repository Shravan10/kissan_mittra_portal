<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $page_title; ?> | <?= SITE_TITLE; ?> </title>
    <?php include('headercss.php'); ?>
</head>
<body class="<?= $addClass; ?>">
    <div id="wrapper">
        <?php include('navigation.php'); ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top grey-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a class="m-r-sm text-muted welcome-message">Welcome to <?= SITE_TITLE; ?>.</a>
                    </li>
                    <?php if(sessionCheck()): ?>
                    <li>
                        <a href="changepassword.php">
                            <i class="fa fa-sign-out"></i> Change Password
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                </nav>
            </div>