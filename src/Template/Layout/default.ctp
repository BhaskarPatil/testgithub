<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Etech Enterprise';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/ninedots.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/skins/_all-skins.min.css"> 
    <link rel="stylesheet" href="<?= BASE_URL ?>plugins/iCheck/square/blue.css">  
    <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/skins/_all-skins.min.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="<?= BASE_URL ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>$.widget.bridge('uibutton', $.ui.button);
    $(function () {
        $('#users_tables').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "scrollX": 200,
        "scrollX": true
        })
    })</script>
    <script src="<?= BASE_URL ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?= BASE_URL ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= BASE_URL ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= BASE_URL ?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= BASE_URL ?>dist/js/adminlte.min.js"></script>
    <script src="<?= BASE_URL ?>dist/js/demo.js"></script>
    <script src="<?= BASE_URL ?>plugins/iCheck/icheck.min.js"></script>
    <?= $this->Html->script('sweetalert.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    
    </head>
    <body class="skin-blue sidebar-mini wysihtml5-supported">
    
    
        <?= $this->element('top-nav') ?>
        <?= $this->element('left-nav') ?>
        <?= $this->fetch('content') ?>
        <footer class="main-footer">
        <strong>Copyright &copy; <?=date('Y')?> <a href="">Etech Enterprise</a>.</strong> All rights
                reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>

    </body>
    </html>
