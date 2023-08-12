<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>atrbpn</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon" />

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ace-rtl.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/chosen.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/select2.min.css" />

    <script src="<?= base_url() ?>assets/js/ace-extra.min.js"></script>
</head>

<body class="no-skin">
    <?php include "navbar.php";
    ?>

    <div class="main-container ace-save-state" id="main-container">
        <?php include "sidebar.php";
        ?>

        <div class="main-content">
            <div class="main-content-inner">
                <?php //include "breadcumb.php"; 
                ?>
                <div class="page-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <?php echo $contents; ?>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->
        <?php include "footer.php"; ?>