<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Destination</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Data Destination</h3>
                    <div align="right">
                    <a href="index_admin.php?p=tujuan-input"><button class="btn btn-xs btn-primary"><i class="fa fa-plus-circle"></i> <span>Tambah data</span></button></a>
                    <!-- <a href="pages/cetak-maskapai.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a> -->
                    </div>
                </div>
                <div class="box-body">
                <table id="tabel" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tujuan</th>
                    <th><i class="fa fa-gear"></i></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM tujuan");
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['nama_tujuan'];?></td>
                    <td><a href="index_admin.php?p=tujuan-edit&id=<?=$data['id_tujuan'];?>"><i class="fa fa-pencil-square"></i> <a href="proses/tujuan-hapus.php?id=<?= $data['id_tujuan'];?>" onclick = "return confirm ('Apakah yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php
                $no++;
                } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</div>

<link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#tabel').DataTable();
});
</script>