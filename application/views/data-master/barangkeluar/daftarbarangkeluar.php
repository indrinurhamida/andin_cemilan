<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card card-body">
            <div class="col-sm-12">
                <form class="form-horizontal" action="">
                    <h1 class="h3 font-weight-bold text-grey text-center">Data Barang Keluar</h1>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'data-master/barangkeluar/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Barang Keluar</th>
                            <th>Nama Barang</th>
                            <th>Rasa</th>
                            <th>Tgl Keluar</th>
                            <th>Stok</th>
                            <!--th>Barang Detail</th-->
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                        foreach ($barangkeluar as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_barangkeluar      ?></td>
                                <td><?= $item->nama_barangkeluar    ?></td>
                                <td><?= $item->id_rasa              ?></td>
                                <td><?= $item->tgl_keluar           ?></td>
                                <td><?= $item->stok                 ?></td>
                                <!--td><?= $item->id_barangdetail      ?></td-->
                                <td style="text-align:center">
                                    <a href="<?php echo base_url() . 'data-master/barangkeluar/edit'; ?>/<?php echo $item->id_barangkeluar ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'data-master/barangkeluar/hapus'; ?>/<?php echo $item->id_barangkeluar ?>" class="btn btn-danger" onclick= "return confirm('Yakin Ingin Menghapus Data?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
