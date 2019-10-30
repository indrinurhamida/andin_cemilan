<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'data-master/pegawai/tambah'; ?>" class="btn btn-primary" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No.hp</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                        foreach ($pegawai as $p) {
                    ?>
                            <tr>
                                <td><?= $p->id_pegawai?></td>
                                <td><?= $p->nama_pegawai?></td>
                                <td><?= $p->alamat ?></td>
                                <td><?= $p->email?></td>
                                <td><?= $p->no_hp?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'data-master/pegawai/edit'; ?>/<?= $p->id_pegawai ?>"
                                            class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'data-master/pegawai/hapus'; ?>/<?php echo $p->id_pegawai ?>" class="btn btn-danger" onclick="
                                     return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                   <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
