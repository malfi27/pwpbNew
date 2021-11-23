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

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
                <h3>Table SPP</h3>
            </div>
            <div class="page-content">
            <section class="section">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>  
                <?php endif; ?>


                <div class="row" id="table-bordered">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data</h4>
                            </div>
                            <div class="card-content" style="padding: 0 1.5rem;">
                            <form action="<?php base_url('admin/spp/add') ?>" method="post" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label for="tahun">Tahun Ajaran*</label>
                                        <input class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
                                            type="text" name="tahun" placeholder="Tahun" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tahun') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">Nominal*</label>
                                        <input class="form-control <?php echo form_error('nominal') ? 'is-invalid':'' ?>"
                                            type="number" name="nominal" min="0" placeholder="Nominal" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nominal') ?>
                                        </div>
                                    </div>
                                    <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <?php $this->load->view('admin/_partials/footer.php');?>
        </div>
    </div>
    <script src="<?php echo base_url('assets/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js');?>"></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/vendors/apexcharts/apexcharts.js');?> "></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/pages/dashboard.js');?> "></script>
    <script src="<?php echo base_url('assets/mazer/dist/assets/js/mazer.js');?>"></script>


    <script>
        function deleteConfirm(url){
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
    </script>
</body>

</html>
