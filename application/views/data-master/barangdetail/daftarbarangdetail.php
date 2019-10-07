<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>barangdetail/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>Kode Daftar Barang</th>
                            <th>Jenis Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($barangdetail as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_barangdetail ?></td>
                                <td><?= $item->nama_barangdetail ?></td>
                                <td>
                                    <a href="<?= base_url() . 'index.php/barangdetail/edit'; ?>/<?= $item->id_barangdetail ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'index.php/barangdetail/hapus'; ?>/<?php echo $item->id_barangdetail ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>