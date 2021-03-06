<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/mazer/dist/assets/css/bootstrap.css');?>">
    
    <link rel="stylesheet" href=" <?php echo base_url('assets/mazer/dist/assets/vendors/iconly/bold.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/mazer/dist/assets/css/app.css');?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/mazer/dist/assets/images/favicon.svg');?>"type="image/x-icon">
</head>

<body>
    <div id="app">
        <?php $this->load->view('admin/_partials/sidebar.php');?>
        <?php $this->load->view('admin/_partials/menu.php');?>
    </div>
    <script src="<?php echo base_url('assets/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/vendors/apexcharts/apexcharts.js');?> "></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/pages/dashboard.js');?> "></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/mazer.js');?>"></script>
</body>

</html>
