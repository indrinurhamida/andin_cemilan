<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'index.php/data-master/barang/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Barang</th>
                            <th>Detail Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            foreach ($barang as $item) {
                            ?>

                            <tr>
                                <td><?= $item->id_barang ?></td>
                                <td><?= $item->id_barangdetail ?></td>
                                <td><?= $item->nama_barang ?></td>
                                <td><?= $item->stok ?></td>
                                <td><?= $item->deskripsi ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/barang/edit'; ?>/<?= $item->id_barang ?>" 
                                            class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'index.php/barang/hapus'; ?>/<?php echo $item->id_barang ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
