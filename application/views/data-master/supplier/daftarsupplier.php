<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Supplier</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url().'data-master/supplier/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Supplier</th>
                            <th>Nama Barang</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            foreach ($supplier as $item) {
                            ?>

                            <tr>
                                <td><?= $item->id_supplier ?></td>
                                <td><?= $item->nama_supplier ?></td>
                                <td><?= $item->alamat_supplier ?></td>
                                <td><?= $item->no_hp ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'supplier/edit'; ?>/<?= $item->id_supplier ?>" 
                                            class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'supplier/hapus'; ?>/<?php echo $item->id_supplier ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
