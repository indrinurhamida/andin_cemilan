<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang Masuk</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'data-master/barangmasuk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Barang Masuk</th>
                            <th>Tanggal Barang Masuk</th>
                            <th>Total Barang Masuk</th>
                            <th>ID Supplier</th>
                            <th>ID Pegawai</th>
                            <th>ID Barang</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        
                        <?php
                        foreach ($barangmasuk as $item) {
                        ?>
                            <tr>
                                <td><?= $item->id_barangmasuk       ?></td>
                                <td><?= $item->tgl_barangmasuk      ?></td>
                                <td><?= $item->total_barangmasuk    ?></td>
                                <td><?= $item->id_supplier          ?></td>
                                <td><?= $item->id_pegawai           ?></td>
                                <td><?= $item->id_barang            ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'data-master/barangmasuk/edit'; ?>/<?php echo $item->id_barangmasuk ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'data-master/barangmasuk/hapus'; ?>/<?php echo $item->id_barangmasuk ?>" class="btn btn-danger" onclick= "return confirm('Yakin Ingin Menghapus Data?')">Hapus</a>
                                </td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
