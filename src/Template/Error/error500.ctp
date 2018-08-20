<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>500 Page not found</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BASE_URL ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/ninedots.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= BASE_URL ?>dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini register-page errors">

<?php $this->layout = 'error'; $this->assign('title', "404 Page not found");?>
  <!-- Content Wrapper. Contains page content -->
 
  <!-- Main content -->
  <section class="content register-page">
    <div class="error-page">
    <h2 class="headline text-red">500</h2>
    
            <div class="error-content">
              <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>
    
              <p>
                We will work on fixing that right away.
                Meanwhile, you may <a href="/dashboard">Return</a> or try using the search form.
              </p>
    
       
    </div>
  </section>

  