<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rawtdati-Admin</title>

    <link href="<?= $asset->asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= $asset->asset('css/sb-admin.css') ?>" rel="stylesheet">
    <link href="<?= $asset->asset('css/plugins/morris.css') ?>" rel="stylesheet">
    <link href="<?= $asset->asset('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= $asset->asset('css/style.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <?php require 'nav.php'; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard <small>Statistics Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard /
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <?= $contenu; ?>

        </div><!-- /.container-fluid -->
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->


<script src="<?= $asset->asset('js/jquery.js') ?>"></script>

<script src="<?= $asset->asset('js/bootstrap.min.js') ?>"></script>

<script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
<script src="<?= $asset->asset('js/firebase.js') ?>"></script>

<script src="<?= $asset->asset('js/plugins/morris/raphael.min.js') ?>"></script>
<script src="<?= $asset->asset('js/plugins/morris/morris.min.js') ?>"></script>
<script src="<?= $asset->asset('js/plugins/morris/morris-data.js') ?>"></script>

</body>

</html>