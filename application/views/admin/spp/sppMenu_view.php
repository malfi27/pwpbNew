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
                    <div class="row" id="table-bordered">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">SPP Table</h4>
                                </div>
                                <div class="card-content" style="padding: 1rem 1.5rem;">
                                    <a href="<?php echo site_url('admin/spp/add') ?>" class="btn btn-primary mb-3">Tambah Data</a>
                                    <!-- table bordered -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Tahun Ajaran</th>
                                                    <th>Nominal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($spp as $spp): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $spp->tahun ?>
                                                    </td>
                                                    <td>
                                                        <?php echo rupiah($spp->nominal) ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('admin/spp/edit/'.$spp->id_spp) ?>"
                                                        class="btn btn-sm btn-success"><i class="fas fa-edit"></i> Ubah</a>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/spp/delete/'.$spp->id_spp) ?>')"
                                                        href="<?php echo site_url('admin/spp/delete/'.$spp->id_spp) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
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
