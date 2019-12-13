<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Laporan Stok</h1>
    </div>
    <div class="card shadow mb-4">
    <!--<div class="card-header py-3">
        <a href="<?php echo base_url() . 'data-master/laporan/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>-->
    <div class="card-body">
                <a href="<?php echo base_url() . 'laporan/laporanstok/cetak'; ?>" 
                class="btn btn-success">Cetak</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>No</th>
                            <th>ID User</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                </thead>
                <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </td>
                            </tr>
                        <?php  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
