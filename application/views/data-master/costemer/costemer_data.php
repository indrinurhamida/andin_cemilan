<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data costemer</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url().'data-master/costemer/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead>
                    <tr style="text-align:center">
                            <th>ID costemer</th>
                            <th>Nama costemer</th>
                            <th>Alamat costemer</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            foreach ($costemer as $item) {
                            ?>

                            <tr>
                                <td><?= $item->id_costemer ?></td>
                                <td><?= $item->nama_costemer ?></td>
                                <td><?= $item->alamat_costemer ?></td>
                                <td><?= $item->no_hp ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'data-master/costemer/edit'; ?>/<?= $item->id_costemer ?>" 
                                            class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'data-master/costemer/hapus'; ?>/<?php echo $item->id_costemer ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
